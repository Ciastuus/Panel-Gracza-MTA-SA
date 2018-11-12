<?php
$bazaHost = 'sql.boxgames.nazwa.pl';
$bazaPort = '3306';
$bazaUzytkownik = 'boxgames_mysql';
$bazaHaslo = 'Damika24';
$bazaTabela = 'boxgames_mysql';

try{
	$polaczenieBaza = new PDO('mysql:host='.$bazaHost.';dbname='.$bazaTabela.';port='.$bazaPort, $bazaUzytkownik, $bazaHaslo );
    $polaczenieBaza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $polaczenieBaza->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
}catch(PDOException $e){
	echo 'Połączenie nie mogło zostać utworzone.<br />';
}
?>