<?php 

class Product
{
  protected $name;
  protected $serial_number;
  protected $weight;
  protected $price;

  public function __construct($_name, $_serial_number, $_weight, $_price)
  {
      $this->name = $_name;
      $this->serial_number = $_serial_number;
      $this->weight = $_weight;
      $this->price = $_price;
  }

}