<?php
session_start();
?>
<?php
if (isset($_SESSION['sesjaLogin']))
	{
	}
  else
	{
	header("location: login.php");
	}
?>