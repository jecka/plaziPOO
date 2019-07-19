<?php
require_once('Car.php');
class UberBlack extends Car{
    public $typeCarAccepetd;
    public $seatsMaterial;

    public function __construct($license , $driver, $typeCarAccepetd, $seatsMaterial){
        parent::__construct($license,$driver);
        $this->typeCarAccepetd  = $typeCarAccepetd;
        $this->seatsMaterial = $seatsMaterial;
      }
}

?>