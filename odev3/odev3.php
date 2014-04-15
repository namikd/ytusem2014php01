<?php

echo "-Sifre Uret-";
echo "<br><br>";
echo $sifre="Basit Sifre: " . basit_sifre_uret();
echo "<br><br>";
echo $sifre2 = "Guclu Sifre: " . guclu_sifre_uret();
function basit_sifre_uret($uzunluk = 10)
{
    $sifre= "";
    $karakterler_1 = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ";
    if($uzunluk <= 3)
    {
        echo "Sifre 3 karakterden uzun olmali";
    }
    else{
    for($i=1;$i<$uzunluk+1;$i++)
    {
       $sifre.= $karakterler_1{
           rand()%52
           };
       
    }
    return $sifre;
}}
function guclu_sifre_uret($uzunluk = 10)
{
    
    $sifre2 = "";
    $karakterler_2 = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ+-/?*!0123456789";
    if($uzunluk <= 3)
    {
        echo "Sifre 3 karakterden uzun olmali";
    }
    else{
    for($j=1;$j<$uzunluk+1;$j++)
    {
        $sifre2.= $karakterler_2{
            rand()%68
            };
        
    }
    return $sifre2;
    }
}