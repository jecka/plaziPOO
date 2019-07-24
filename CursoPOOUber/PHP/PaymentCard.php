<?php
    require_once('Payment.php');
    class PaymentCard extends Payment{
        public function __construct($id,$number,$cvv , $date){
            parent::__construct($id);
            $this->number = $number;
            $this->cvv = $cvv;
            $this->date=$date;
        }
    }
?>