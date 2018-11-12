<?php
ob_start();
include 'bazadanych.php';

$login = $_GET['login'];
$zawartoscBaza = $polaczenieBaza->query("SELECT * FROM `cG_uzytkownicy` WHERE `Login` = '$login'");

if ($zawartoscBaza->rowCount() > 1)
	{
	foreach($zawartoscBaza as $kolumnaBaza)
		{
		}
	}
elseif ($zawartoscBaza->rowCount() == 1)
	{

	header('Content-Type: image/png;');
	ob_end_clean();
		
	$obrazekSygnatura = @imagecreatefrompng('grafiki/sygnatura/sygnatura3.png');

	$kolorTekst = imagecolorallocate($obrazekSygnatura, 255, 255, 255);

	$czcionkaTekst = 'czcionki/czcionka.ttf';
	$rezultatBaza = $zawartoscBaza->fetch(PDO::FETCH_ASSOC);
	
	imagettftext($obrazekSygnatura, 13, 0, 20, 40, $kolorTekst, $czcionkaTekst, "Login: ".$rezultatBaza['Login']."");
	imagettftext($obrazekSygnatura, 13, 0, 20, 60, $kolorTekst, $czcionkaTekst, "UID: ".$rezultatBaza['UID']."");
	imagettftext($obrazekSygnatura, 13, 0, 20, 80, $kolorTekst, $czcionkaTekst, "Portfel: ".$rezultatBaza['Pieniadze']." PLN");
	imagettftext($obrazekSygnatura, 13, 0, 20, 100, $kolorTekst, $czcionkaTekst, "Bank: ".$rezultatBaza['PieniadzeBank']." PLN");
	imagettftext($obrazekSygnatura, 13, 0, 20, 120, $kolorTekst, $czcionkaTekst, "Reputacja: ".$rezultatBaza['cPoints']."");
	imagettftext($obrazekSygnatura, 13, 0, 20, 140, $kolorTekst, $czcionkaTekst, "Przegrane godziny: ".$rezultatBaza['Godzina']." godzin(a) ".$rezultatBaza['Minuta']." minut(y)");
	imagepng($obrazekSygnatura);
	
	}
  
  else 
	  
	header('Content-Type: image/png;');
	ob_end_clean();
	
	$obrazekSygnatura = @imagecreatefrompng('grafiki/sygnatura/sygnatura3.png');

	$kolorTekst = imagecolorallocate($obrazekSygnatura, 255, 255, 255);

	$czcionkaTekst = 'czcionki/czcionka.ttf';
	$rezultatBaza = $zawartoscBaza->fetch(PDO::FETCH_ASSOC);
	imagettftext($obrazekSygnatura, 13, 0, 20, 40, $kolorTekst, $czcionkaTekst, "Login: brak informacji");
	imagettftext($obrazekSygnatura, 13, 0, 20, 60, $kolorTekst, $czcionkaTekst, "UID: brak informacji");
	imagettftext($obrazekSygnatura, 13, 0, 20, 80, $kolorTekst, $czcionkaTekst, "Portfel: brak informacji");
	imagettftext($obrazekSygnatura, 13, 0, 20, 100, $kolorTekst, $czcionkaTekst, "Bank: brak informacji");
	imagettftext($obrazekSygnatura, 13, 0, 20, 120, $kolorTekst, $czcionkaTekst, "Reputacja: brak informacji");
	imagettftext($obrazekSygnatura, 13, 0, 20, 140, $kolorTekst, $czcionkaTekst, "Przegrane godziny: brak informacji");
	imagepng($obrazekSygnatura);
  
ob_end_flush();
?>
