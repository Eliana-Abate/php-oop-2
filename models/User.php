<?php require_once __DIR__ . '/Product.php' ?> 

<?php 

class User
{
  protected $name;
  protected $surname;
  protected $newsletter_subscribed;
  protected $discount;
  protected $last_purchase;
  protected $last_price;



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

    public function setLastPurchase($product) {
        return $this->last_purchase = $product;
    }

    public function getLastPurchase() {
        return $this->last_purchase;
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

    /*public function setLastPrice($prezzo, $sconto) {
        $prezzo = $this->getLastPurchase()->price;
        $sconto = $this->discount; 
        return $this->last_price = $prezzo - ($prezzo * $sconto / 100);
    } */
    
    

    
}