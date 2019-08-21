<?php 
    class Customerr 
    {
        private $customerId;
        private $emailAddress;
        private $name;
        private $pass;
        private $phone;

        public function __construct($customerId, $emailAddress, $name, $pass, $phone) {
            
            $this->customerId   = $customerId;
            $this->emailAddress = $emailAddress;
            $this->name         = $name;
            $this->pass         = $pass;
            $this->phone        = $phone;
        }

        // GET, SET CustomerId
        public function getcustomerId()
        {
            return $this->customerId;
        }
        public function setcustomerId($customerId)
        {
            $this->customerId = $customerId;
        }

        //GET, SET EmailAddress
        public function getemailAddress()
        {
            return $this->emailAddress;
        }
        public function setemailAddress($emailAddress)
        {
            $this->emailAddress = $emailAddress;
        }

        //GET, SET Name
        public function getName()
        {
            return $this->name;
        }
        public function setName($name)
        {
            $this->name = $name;
        }

        // GET, SET Password
        public function getPass()
        {
            return $this->pass;
        }
        public function setPass($pass)
        {   
            $this->pass = $pass;
        }

        //GET, SET Phone   
        public function getPhone()
        {
            return $this->phone;
        }
        public function setPhone($phone)
        {
            $this->phone = $phone;
        }
    }
    
?>