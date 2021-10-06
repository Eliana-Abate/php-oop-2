<?php 

class Product
{
 public $name;
 public $brand;
 public $serial_number;
 public $weight;
 public $price;

  public function __construct($_name, $_brand, $_serial_number, $_weight, $_price)
  {
      $this->name = $_name;
      $this->brand = $_brand;
      $this->serial_number = $_serial_number;
      $this->weight = $_weight;
      $this->price = $_price;
  }

}