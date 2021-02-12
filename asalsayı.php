<?php
$sayi=$_POST['sayi'];
 
$asal=0; $i=2;
 
do
{
	if ($sayi % $i == 0)
	{
		$asal = 1;
	}
	$i++;
}
while($i<$sayi);
 
if ($asal != 1)
{
	$sonuc="Sayı Asaldır";
}
else
{
	$sonuc="Sayı Asal Değildir";
}
 
?>
 
<table width="435" border="1" bgcolor="#FFFF66">
  <tr bgcolor="#00CCCC">
    <td colspan="2" align="center">PHP Asal Sayı Bulma</td>
  </tr>
  <tr bgcolor="#99FF66">
    <td width="206">Girilen Sayı:</td>
    <td width="213"><?php echo $sayi; ?></td>
  </tr>
  <tr bgcolor="#CC9966">
    <td colspan="2">
    
<h1><?php echo $sonuc; ?>  </h1>
 