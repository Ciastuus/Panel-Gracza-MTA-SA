<?php
session_start();
?>
<?php
ob_start();
include ("bazadanych.php");

$komunikat = "";

if (isset($_POST['przyciskZaloguj']))
	{
	$Login = trim($_POST['Login']);
	$Haslo = trim(md5($_POST['Haslo']));
	if ($Login != "" && $Haslo != "")
		{
		try
			{
			$rezultatBaza = "SELECT * FROM `cG_uzytkownicy` WHERE `Login`=:Login and `Haslo`=:Haslo";
			$zawartoscBaza = $polaczenieBaza->prepare($rezultatBaza);
			$zawartoscBaza->bindParam('Login', $Login, PDO::PARAM_STR);
			$zawartoscBaza->bindValue('Haslo', $Haslo, PDO::PARAM_STR);
			$zawartoscBaza->execute();
			$liczbaBaza = $zawartoscBaza->rowCount();
			$kolumnaBaza = $zawartoscBaza->fetch(PDO::FETCH_ASSOC);
			if ($liczbaBaza == 1 && !empty($kolumnaBaza))
				{
				header('location: index.php');
				$_SESSION['sesjaID'] = $kolumnaBaza['UID'];
				$_SESSION['sesjaLogin'] = $kolumnaBaza['Login'];
				}
			  else
				{
				$komunikat = "<div class='toast' data-title='Błąd!' data-message='Nie poprawny login, lub hasło' data-type='error'></div>";
				}
			}

		catch(PDOException $bladKomunikat)
			{
			echo "Błąd : " . $bladKomunikat->getMessage();
			}
		}
	  else
		{
		$komunikat = "<div class='toast' data-title='Uwaga!' data-message='Proszę o uzupełnienie wszystkich pól' data-type='warning'></div>";
		}
	}

ob_end_flush();
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Panel Gracza">
      <meta name="author" content="Ciastuuś">
      <link rel="icon" href="grafiki/favicon.ico" type="image/x-icon">
      <title>Logowanie - Panel Gracza</title>
      <!-- // CSS \\ -->
      <link rel="stylesheet" href="styl/styl.css">
      <style>
         .loader {
         position: fixed;
         left: 0;
         top: 0;
         width: 100%;
         height: 100%;
         background-color: #F5F8FA;
         z-index: 9998;
         text-align: center;
         }
         .plane-container {
         position: absolute;
         top: 50%;
         left: 50%;
         }
      </style>
   </head>
	<!-- // KONIEC CSS \\ -->
   <body class="light">
	<!-- // ŁADOWANIE \\ --> 
      <div id="loader" class="loader">
         <div class="plane-container">
            <div class="preloader-wrapper small active">
               <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
               <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                     <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                     <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                     <div class="circle"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
	<!-- // KONIEC ŁADOWANIE \\ --> 
	<!-- // LOGOWANIE \\ -->
<div id="app">
<div class="page parallel">
    <div class="d-flex row">
        <div class="col-md-3 white">
            <div class="p-5 mt-5">
                <img src="grafiki/logo/logo.png" alt=""/>
            </div>
            <div class="p-5">
                <h3>Panel Gracza 1.0</h3>
                <p>Zaloguj się za pomocą loginu i hasła!
				<br />
                Login: test Haslo: test</p>
                <form method="post">
                    <div class="form-group has-icon"><i class="icon-user"></i>
                        <input class="form-control form-control-lg type="text" name="Login" id="Login" value="" autocomplete="off""
                               placeholder="Login">
                    </div>
                    <div class="form-group has-icon"><i class=" icon-vpn_key"></i>
                        <input class="form-control form-control-lg"type="password" name="Haslo" id="Haslo" value="" autocomplete="off" placeholder="Haslo">
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="przyciskZaloguj" id="przyciskZaloguj" value="Zaloguj się">
					<span><?php echo @$komunikat; ?></span>
                </form>
            </div>
        </div>
	<!-- KONIEC LOGOWANIE \\ -->
	<!-- TŁO -->
        <div class="col-md-9 height-full blue accent-3 align-self-center text-center" data-bg-repeat="false" data-bg-possition="center"
             style="background: url('https://images7.alphacoders.com/581/thumb-1920-581598.jpg') #FFEFE4">
        </div>
	<!-- TŁO -->
    </div>
</div>
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<script src="skrypt/skrypt.js"></script>
</body>
</html>