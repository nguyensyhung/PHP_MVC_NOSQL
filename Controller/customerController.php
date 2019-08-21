<?php 
require_once('../Model/customer.php');

    session_start();
    
    if (!isset($_SESSION['customerss'])) 
	{
		$_SESSION['customerss'] = array(
			new Customerr('1', 'nguyensyhung689@gmail.com', 'Nguyễn Hùng', '123','0961514689'),

		);
	}

    $action = filter_input(INPUT_POST, 'action');
    if (empty($action)) {
        $action = filter_input(INPUT_GET, 'action');
        if (empty($action)) {
            $action = 'list_customer';
        }
    }

    switch ($action) {
        case 'list_customer':
            include "../View/list_customer.php";
            break;
        
        default:
            # code...
            break;
    }

?>