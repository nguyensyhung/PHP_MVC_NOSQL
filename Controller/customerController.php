<?php 
require_once('../Model/db_customer.php');

    session_start();
    
    if (!isset($_SESSION['customerss'])) 
	{
		$_SESSION['customerss'] = array(
            new Customerr('1', 'nguyensyhung689@gmail.com', 'Nguyễn Hùng', '123','0961514689'),
            new Customerr('2', 'nguyensyhung@gmail.com', 'Nguyễn Sỹ Hùng', '123456789','14689'),

		);
    }



    $action = filter_input(INPUT_POST, 'action');
    if (empty($action)) {
        $action = filter_input(INPUT_GET, 'action');
        if (empty($action)) {
            $action = 'login';
        }
    }

    switch ($action) {

        case 'login':
            include "../View/login.php";
            break;
        case 'login_customer':

            
            if (isset($_POST['login_customer'])) {
                $username = $_POST["email"];
                $password = $_POST["pass"];
                $username = strip_tags($username);
		        $username = addslashes($username);
		        $password = strip_tags($password);
                $password = addslashes($password);
                foreach ($_SESSION['customerss'] as $customer) {
                    $email = $customer->getemailAddress();
                    $pass = $customer->getpass() ;
                if ($username == $email && $password == $pass) {
                    $_SESSION['email'] = $username;
                    include "../View/list_customer.php";
                }
            }  
            
       } 
       else{
        include "../View/login.php";
       }
             
            break;
        case 'logout':
            include "../View/login.php";
            break;
        case 'list_customer':
            include "../View/list_customer.php";
            break;
        case 'new_customer':
            include "../View/create.php";
            break;
        case 'add_customer':
                $customerID        	 = filter_input(INPUT_POST, 'customerID');
                $emailAddress        = filter_input(INPUT_POST, 'emailAddress');
                $name 				= filter_input(INPUT_POST, 'name');
                $pass             	= filter_input(INPUT_POST, 'pass');
                $phone       		= filter_input(INPUT_POST, 'phone');
                if (empty($customerID) || empty($emailAddress) || empty($pass )) {
                    $errors[] = 'Bạn chưa nhập đủ dữ liệu!';
                }
                if (!empty($errors)) {
                    include '../View/create.php';
                }
                else {
                    Db_customer::addCustomer($customerID, $emailAddress, $name, $pass, $phone);
                    header("Location: ?action=list_customer");
                }  


            break;
        case 'delete':
            $customer_id = $_GET['id'];
            foreach ($_SESSION['customerss'] as $key => $customer) {
                if ($customer->getcustomerId() == $customer_id) {
                    unset($_SESSION['customerss'][$key]);
                }
            }
            header("Location: ?action=list_customer");
            break;
        
        default:
            # code...
            break;
    }

?>