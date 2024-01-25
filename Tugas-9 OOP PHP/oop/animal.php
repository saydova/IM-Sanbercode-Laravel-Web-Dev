<?php

class animal{
   
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($string)
    {
        $this->name =$string;
    }
}



// $sheep  = new animal("shaun");
// echo "Name : " . $sheep->name . "<br>";
// echo "Legs : " . $sheep->legs . "<br>";
// echo "cold blooded : " . $sheep->cold_blooded . "<br> <br>";


// $sheep = new Animal("shaun");
// // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// $sheep = new Animal();
// $sheep->shaun();

// class Mobil 
// {
//   public $roda = 4;
//   public function jalan()
//   {
//     echo "Mobil berjalan";
//   }
// }








?>