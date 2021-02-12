<?php
echo"Hoşgeldiniz"
$saatler=Array(
    "00.00", "01.00", "02.00", "03.00", "04.00", "05.00", "06.00", "07.00", "08.00", "09.00", "10.00", "11.00", 
    "12.00", "13.00", "14.00", "15.00", "16.00", "17.00", "18.00", "19.00", "20.00", "21.00", "22.00", "23.00"

);
 if($saat=06.00 or $saat=10.00){
     echo("Günaydın")

 } elseif($saat=10.00 or $saat=17.00){
       echo("İyi günler")

 } elseif($saat=17.00 or $saat=20.00){
     echo("İyi akşamlar")

} elseif($saat=20.00 or $saat=00.00){
    echo("İyi geceler")
    
} elseif($saat=00.00 or $saat=06.00){
    echo("Esenlikler dilerim")
 }
 ?>   

