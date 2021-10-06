<?php 

class User
{
  protected $name;
  protected $surname;
  protected $email;
  protected $newsletter_subscribed;



    public function __construct($_name, $_surname, $_email,  $_newsletter_subscribed)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->newsletter_subscribed = $_newsletter_subscribed;
    }

    
}