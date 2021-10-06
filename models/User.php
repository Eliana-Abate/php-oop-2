<?php 

class User
{
  protected $name;
  protected $surname;
  protected $email;
  protected $discount;



    public function __construct($_name, $_surname, $_email, $_discount)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->discount = $_discount;
    }

    private function setDiscount($_newsletter_subscribed) {

        if ($_newsletter_subscribed) {
            $this->discount = 10;
        } else {
            $this->discount = 0;
        }

    }

    public function getDiscount() {
        return $this->discount;
    }

    
}