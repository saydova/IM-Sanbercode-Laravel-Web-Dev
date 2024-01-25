<?php

require_once('animal.php');

class ape  extends animal{
    public $legs = "2";
    public $yel = "Auooo";

  public function yell()
  {
    echo "Yell : ";
  }
}

//   public $roda = 4;
//   public function jalan()
//   {
//     echo "Mobil berjalan";
//   }
?>
