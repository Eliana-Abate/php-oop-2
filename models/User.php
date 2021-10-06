<?php 

class User
{
  protected $name;
  protected $surname;
  protected $newsletter_subscribed;
  protected $discount;
  protected $last_purchase;



    public function __construct($_name, $_surname, $_newsletter_subscribed)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->newsletter_subscribed = $_newsletter_subscribed;
    }

    public function getFullName() {
        return $this->name . ' ' . $this->surname;
    }

    public function setNewsletter($subscription) {
        $this->newsletter_subscribed = $subscription;
    }

    private function setDiscount() {

        if ($this->newsletter_subscribed) {
            $this->discount = 10;
        } else {
            $this->discount = 0;
        }

    }

    public function getDiscount() {
        $this->setDiscount();
        return $this->discount;
    }

    
}