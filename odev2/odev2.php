<?php

$meyveler=  array(
    1  =>array ('meyve_adi'=>'Cilek', 'fiyat'=>7.00, 'adet'=>98),
    2  =>array ('meyve_adi'=>'Kivi', 'fiyat'=>6.00, 'adet'=>12),
    3  =>array ('meyve_adi'=>'Muz', 'fiyat'=>3.50, 'adet'=>78),
    4  =>array ('meyve_adi'=>'Visne', 'fiyat'=>4.00, 'adet'=>23),
    5  =>array ('meyve_adi'=>'Kiraz', 'fiyat'=>2.00, 'adet'=>45),
    6  =>array ('meyve_adi'=>'Erik', 'fiyat'=>8.00, 'adet'=>95),
    7  =>array ('meyve_adi'=>'Dut', 'fiyat'=>9.00, 'adet'=>90),
    8  =>array ('meyve_adi'=>'Elma', 'fiyat'=>3.00, 'adet'=>80),
    9  =>array ('meyve_adi'=>'Armut', 'fiyat'=>5.00, 'adet'=>40),
    10 =>array ('meyve_adi'=>'Karpuz', 'fiyat'=>7.50, 'adet'=>60)
);

echo "deger bir: ". ($a = rand(1, 20));
echo "<br> deger iki: ".($b = rand(1, 100));
$c = count($meyveler);
echo "<br><br>";

function stok_kontrol($m_no, $m_adet)
{
    if(is_numeric($m_no) && is_numeric($m_adet)){
		echo 'degerler sayisal <br><br>';
	} else {
		echo 'degerler sayisal değil <br><br>';
	}
	
    global $c;
	global $meyveler;
	
	if($m_no > $c){
		echo "aradiginiz meyve stokta mevcut degil"; 
	} elseif ($m_adet > $meyveler[$m_no]['adet']) {
		echo "Stokta o kadar " .$meyveler[$m_no]['meyve_adi']. " mevcut degil, sadece ". $meyveler[$m_no]['adet']. " adet mevcut";
	} else {
		echo $meyveler[$m_no]['meyve_adi']." , ". $meyveler[$m_no]['adet'] ." adet var ve toplam tutari  ".($m_adet * $meyveler[$m_no]['fiyat'])." TL. ";
	}
}
stok_kontrol($a,$b);