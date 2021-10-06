<?php require_once __DIR__ . '/User.php' ?> 

<?php 

class PremiumUser extends User
{
  protected $level;
  protected $discount;

    protected function __construct($_name, $_surname, $_newsletter_subscribed, $_level) {

        $this->level = $_level;
        parent::__construct($_name, $_surname, $_newsletter_subscribed);
    }


    private function setDiscount() {

        if ($this->level > 1 && $this->newsletter_subscribed) {

            $this->discount = 25;

        } else if ($this->level > 1 && !$this->newsletter_subscribed) {

            $this->discount = 20;

        } else {

            $this->discount = 15;
        }

    }

    protected function getDiscount() {
        $this->setDiscount();
        return $this->discount;
    }

   
    
}