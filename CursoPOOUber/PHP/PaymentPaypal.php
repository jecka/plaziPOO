<?php
    require_once('Payment.php');
    class PaymentPayPal extends Payment{
        public function __construct($id,$email){
            parent::__construct($id);
            $this->email= $email;
        }
    }

?>