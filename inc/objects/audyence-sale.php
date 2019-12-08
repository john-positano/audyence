<?php

class Audyence_Sale {
  public function __construct () {
    $this->Sale_ID = 0;
    $this->Sale_Name = "Sale Name"; // (base64)
    $this->Sale_Description = "Sale Description"; // (base64)
    $this->Sale_Product_Discounts = [ "0" => 00.00, "1" => 0 ]; // (json_encode)
    $this->Sale_Aggregate_Deadline = "0000-00-00 00:00:00";
    $this->Sale_Individual_Deadline = [ "period" => "hours", "multiple" => 0 ]; // (json_encode)
    $this->Sale_Hash = "108a9s4hsg89dr1mpfadh109f10fd5l6m023xv0q8t49f";
  }
}