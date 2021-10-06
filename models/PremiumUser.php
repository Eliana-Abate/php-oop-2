<?php require_once __DIR__ . '/User.php' ?> 

<?php 

class PremiumUser extends User
{
  protected $level;

    protected function __construct($_name, $_surname, $_email, $_discount, $_level) {

        $this->level = $_level;
        parent::__construct($_name, $_surname, $_email, $_discount);
    }


    private function setDiscount($_newsletter_subscribed) {

        if ($this->level > 1 && $_newsletter_subscribed) {

            $this->discount = 25;

        } else if ($this->level > 1 && !$_newsletter_subscribed) {

            $this->discount = 20;

        } else {

            $this->discount = 15;
        }

    }

    protected function getDiscount() {
        $this->setDiscount($_newsletter_subscribed);
        return $this->discount;
    }

   
    
}