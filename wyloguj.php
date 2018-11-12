<?php
session_start();
session_unset();
session_destroy();
?>
<?php
    $_SESSION['sesjaID'] = "";
    $_SESSION['sesjaLogin'] = "";
    if(empty($_SESSION['sesjaID'])) header("location: login.php");
?>