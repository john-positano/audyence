<?php

class Audyence_Voucher {
  public function __construct () {
    $this->Voucher_ID = 0;
    $this->Voucher_Name = "Voucher Name";
    $this->Voucher_Description = "Voucher Description";
    $this->Voucher_Product_Discounts = [ "0" => 00.00, "1" => 0 ]; // (json_encode)
    $this->Voucher_Aggregate_Deadline = "0000-00-00 00:00:00";
    $this->Voucher_Individual_Deadline = [ "period" => "hours", "multiple" => 0 ]; // (json_encode)
    $this->Voucher_Hash = "108a9s4hsg89dr1mpfadh109f10fd5l6m023xv0q8t49f";
  }
}