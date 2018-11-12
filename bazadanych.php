<?php
$bazaHost = 'nazwa hosta';
$bazaPort = '3306';
$bazaUzytkownik = 'nazwa użytkownika';
$bazaHaslo = 'hasło użytkownika';
$bazaTabela = 'nazwa tabeli';

try{
	$polaczenieBaza = new PDO('mysql:host='.$bazaHost.';dbname='.$bazaTabela.';port='.$bazaPort, $bazaUzytkownik, $bazaHaslo );
    $polaczenieBaza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $polaczenieBaza->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
}catch(PDOException $e){
	echo 'Połączenie nie mogło zostać utworzone.<br />';
}
?>
