<?php

class Audyence_User {
  public function __construct () {
    $this->User_ID = 0;
    $this->User_Nice_Name = "User NiceName"; // (base64)
    $this->User_First_Name = "User"; // (base64)
    $this->User_Last_Name = "NiceName"; // (base64)
    $this->User_Email = "user@email.com"; 
    $this->User_Registered = "0000-00-00 00:00:00";
    $this->User_Products = [ [ "0" => 0 (hours_overdue) ], [ "1" => "cancelled" ] ]; // (base64)
    $this->User_Billing_Info = [ "Country" => "US", "Zip" => 32803, [...] ]; // (base64)
    $this->User_Shipping_Info = [ "Country" => "US", "Zip" => 32803, [...] ]; // (base64)
  }
}