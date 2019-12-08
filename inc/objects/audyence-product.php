<?php

class Audyence_Product {
  public function __construct () {
    $this->Product_ID = 0;
    $this->Product_Name = "Product Name"; // (base64)
    $this->Product_Description = "Product Description"; // (base64)
    $this->Product_Price = 00.00; 
    $this->Product_Recurring_Price = 00.00;
    $this->Product_Recursion_Period = [ "period" => "hours", "multiple" => 0 ]; // (json_encode)
    $this->Product_Is_Trial = false;
    $this->Product_Trial_Price = 00.00;
    $this->Product_Trial_Period = [ "period" => "hours", "multiple" => 0 ]; // (json_encode)
    $this->Product_Billing_Attempt_Schedule = [ [ "period" => "hours", "multiple" => 0, "recursion" => 0 ] ]; // (json_encode)
    $this->Product_Delinquency_Roles = [ [ "period" => "hours", "multiple" => 0, [ "guest", "access" ] ] ]; // (json_encode)
    $this->Product_Associated_Roles = [ "guest", "access", "other-access" ]; // (json_encode)
    $this->Product_Hash = "108a9s4hsg89dr1mpfadh109f10fd5l6m023xv0q8t49f";
    $this->Product_Custom_Fields = [ "field1" => "value1", "field2" => "value2" ]; //(json_encode)
  } 
}