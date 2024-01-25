<?php

require_once('animal.php');

class frog  extends animal{
    public $jum = "Hop Hop";

    public function jump()
  {
    echo "Jump : ";
  }
}

?>
