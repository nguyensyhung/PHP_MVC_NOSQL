<?php 
    require_once('customer.php');

    class Db_customer  
    {
        public static function addCustomer($customerID, $emailAddress, $name, $pass, $phone)
        {
            $customer = new Customerr($customerID, $emailAddress, $name, $pass, $phone);
            $_SESSION['customerss'][] = $customer;
        }
    }
    

?>