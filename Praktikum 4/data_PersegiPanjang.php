<?php 
require_once "class_PersegiPanjang.php";

$pp1 = new PersegiPanjang( 6,8 );
$pp2 = new PersegiPanjang( 18,12 );
echo "<br/>Luas Persegi Panjang 1  = ".$pp1->getLuas();
echo "<br>Keliling Persegi Panjang 1 = ".$pp1->getKeliling(); 
echo "<br>Luas Persegi Panjang 2 = ".$pp2->getLuas();
echo "<br>Keliling Persegi Panjang 2 = ".$pp2->getKeliling();