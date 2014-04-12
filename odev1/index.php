<?php
session_start();
// Session'i baslatiyoruz.

$input = array(
    'menekse.jpg',
    'gul.jpg',
    'papatya.jpg',
    'orkide.jpg',
    'begonya.jpg',
    'lale.jpg',
    'fulya.jpg'
     );

//Eger Session'da flowerStack isimli index yoksa olusturuyoruz.
if (!array_key_exists('flowerStack', $_SESSION)) {
    $_SESSION['flowerStack'] = array();
}

//flowerStack index'ini input array'ine esitliyoruz.
if (count($_SESSION['flowerStack']) == 0) {
    $_SESSION['flowerStack'] = $input;
}

//flowerStack icinden random bir index rakami aliyoruz.
$randomFlowerIndex = array_rand($_SESSION['flowerStack'], 1);

//flowerStack icinden aldigimiz random indexe ait degeri flower'a esitliyoruz.
$flower = $_SESSION['flowerStack'][$randomFlowerIndex];

//flowerStack icinden aldigimiz random index'e ait degeri kaldiriyoruz
unset($_SESSION['flowerStack'][$randomFlowerIndex]);

echo $flower;

?>