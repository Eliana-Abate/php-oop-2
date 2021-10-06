<?php 

class CreditCard
{
 protected $brand;
 protected $card_number;
 protected $expiration_date;

  public function __construct($_brand, $_card_number, $_expiration_date)
  {
      $this->brand = $_brand;
      $this->card_number = $_card_number;
      $this->expiration_date = $_expiration_date;   
  }

  public function getCardDetails() {
    return $this->brand . ' Nr: ' . $this->card_number . ' - Scadenza: ' . $this->expiration_date;
  }


}