<?php require_once __DIR__ . '/Product.php' ?> 
<?php require_once __DIR__ . '/CreditCard.php' ?> 

<?php 

class User
{
  protected $name;
  protected $surname;
  protected $newsletter_subscribed;
  protected $discount;
  protected $last_purchase;
  public $discounted_price;
  public $credit_card;
  



    public function __construct($_name, $_surname, $_newsletter_subscribed)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->newsletter_subscribed = $_newsletter_subscribed;
    }

    public function getFullName() {
        return $this->name . ' ' . $this->surname;
    }

    /* TESTER: public function setNewsletter($subscription) {
        $this->newsletter_subscribed = $subscription;
    }*/ 

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

    public function getDiscountedPrice() {
        $this->discounted_price = $this->last_purchase->price - ($this->last_purchase->price * ($this->discount / 100));
       return  $this->discounted_price;
    } 
    

    public function setCreditCard($card) {
        return $this->credit_card = $card;
    }

    
    
    public function getCreditCard() {
        return $this->credit_card->getCardDetails();
    }

    
}