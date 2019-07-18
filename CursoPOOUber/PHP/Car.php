<?php
require_once 'Account.php'
class Car{
  public $id;
  public $license;
  Account $driver;
  public $passenger;

  function __construct($license , Account $driver){
    $this->license  = $license;
    $this->driver = $driver;
  }

  public function printDataCr(){
     echo "License: ".$this->license . "Driver: ".$this->driver->name;
  }
}