<?php 
require_once('animal.php');
require_once('ape.php');
require_once('frog.php');



// index.php


$sheep  = new animal("shaun");
echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold blooded : " . $sheep->cold_blooded . "<br> <br>";

$Kodok  = new frog("buduk");
echo "Name : " . $Kodok->name . "<br>";
echo "Legs : " . $Kodok->legs . "<br>";
echo "Cold blooded : " . $Kodok->cold_blooded . "<br>";
$Kodok->jump(); // "Hip Hop"
echo $Kodok->jum . "<br><br>";

$sungokong = new ape("kera sakti");
echo "Name : " . $sungokong->name . "<br>";
echo "Legs : " . $sungokong->legs . "<br>";
echo "Cold blooded : " . $sungokong->cold_blooded . "<br>";
$sungokong->yell(); // "Auooo"
echo $sungokong->yel . "<br><br>";




// $mini = new Mobil();
// $mini->jalan(); // menampilkan echo 'Mobil berjalan'
// // echo $mini->roda; // 4


// $sungokong = new Ape("kera sakti");
// $sungokong->yell() // "Auooo"

// $kodok = new Frog("buduk");
// $kodok->jump() ; // "hop hop"


?>