<?php
include 'sprawdz_login.php';
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Panel Gracza">
      <meta name="author" content="Ciastuuś">
      <link rel="icon" href="grafiki/favicon.ico" type="image/x-icon">
      <title>Sygnatura - Panel Gracza</title>
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
      <!-- // INFORMACJE O UŻYTKOWNIKU  \\ --> 
      <div id="app">
      <aside class="main-sidebar fixed offcanvas shadow">
         <section class="sidebar">
            <div class="w-70px mt-3 mb-3 ml-3">
               <img src="https://i.imgur.com/O3pbp8R.png"> Panel Gracza 1.0
            </div>
            <div class="relative">
               <div class="user-panel p-3 light mb-2">
                  <div>
                     <div class="float-left image">
                        <img class="user_avatar" src="grafiki/rozne/u13.png">
                     </div>
                     <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1"><?php echo "".$_SESSION['sesjaLogin'].""; ?></h6>
                        <span class="badge badge-danger">Zarząd</span>
                     </div>
                  </div>
               </div>
               <!-- // KONIEC INFORMACJE O UŻYTKOWNIKU  \\ --> 
               <!-- // NAWIGACJA \\ --> 
               <!-- // KATEGORIA 1 - STREFA GRACZA \\ -->
               <ul class="sidebar-menu">
                  <li class="header light mt-0"><strong>STREFA GRACZA</strong></li>
                  <li class="treeview">
                     <a href="index.php">
                     <i class="icon icon-info_outline s-18"></i> <span>Statystki</span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="pojazdy.php">
                     <i class="icon icon-directions_car s-18"></i> <span>Pojazdy</span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="sygnatura.php?login=<?php echo "".$_SESSION['sesjaLogin'].""; ?>">
                     <i class="icon icon-assignment_ind s-18"></i> <span>Sygnatura</span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="wyszukiwarka.php">
                     <i class="icon icon-search3 s-18"></i> <span>Wyszukiwarka</span>
                     </a>
                     <!-- // KATEGORIA 2 - STREFA SERWERA \\ -->
                  <li class="header light mt-0"><strong>STREFA SERWERA</strong></li>
                  <li class="treeview ">
                     <a href="#">
                     <i class="icon icon-server s-18"></i> <span>Statystki</span>
                     </a>
                  </li>
                  <li class="treeview ">
                     <a href="#">
                     <i class="icon icon-list s-18"></i> <span>Lista graczy</span>
                     </a>
                  </li>
                  <li class="treeview ">
                     <a href="#">
                     <i class="icon icon-block s-18"></i> <span>Lista banów</span>
                     </a>
                     <!-- // KATEGORIA 2 - STREFA EKIPY \\ -->
                  <li class="header light mt-0"><strong>STREFA EKIPY</strong></li>
                  <li class="treeview ">
                     <a href="#">
                     <i class="icon icon-user-secret s-18"></i> <span>Zarząd</span>
                     </a>
                  </li>
                  <li class="treeview ">
                     <a href="#">
                     <i class="icon icon-user-secret s-18"></i> <span>Administrator</span>
                     </a>
                  </li>
                  <li class="treeview ">
                     <a href="#">
                     <i class="icon icon-user-secret s-18"></i> <span>Supporter</span>
                     </a>
                     <!-- // KATEGORIA 3 - OPCJE \\ -->
                  <li class="header light mt-0"><strong>OPCJE</strong></li>
                  <li class="treeview ">
                     <a href="wyloguj.php">
                     <i class="icon icon-sign-out s-18"></i> <span>Wyloguj się</span>
                     </a>
                  </li>
               </ul>
               </li>
               </ul>
         </section>
      </aside>
      <!-- // KONIEC NAWIGACJI \\ --> 
      <!-- // GÓRNA CZĘŚĆ \\ -->
      <div class="has-sidebar-left">
      <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
      <div class="search-bar">
      <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text">
      </div>
      <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
         aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
      </div>
      </div>
      </div>
      <div class="sticky">
      </div>
      </div>
      </div>
      <div class="page has-sidebar-left height-full">
      <header class="blue accent-3 relative nav-sticky">
         <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
               <div class="col">
                  <h7>
                     <i class="icon-home"></i>
                     Strona Główna <i class="icon-angle-right"></i> Strefa Gracza <i class="icon-angle-right"></i> Sygnatura
                  </h7>
               </div>
            </div>
         </div>
      </header>
      <div class="container-fluid relative animatedParent animateOnce">
         <div class="tab-content pb-3" id="v-pills-tabContent">
         </div>
         <!-- // KONIEC GÓRNA CZĘŚĆ \\ -->
         <!-- // STATYSTKI - SYGNATURA \\ -->
		<div>
		<form class="form-inline my-2 my-lg-0" method="get">
		<input style="width: 21em;" class="form-control mr-sm-2" name="login" type="text">
		<br>
		<input class="btn btn-outline-primary my-2 my-sm-0" value="Wygeneruj" type="Submit">
		</form>
		<br>
		  <img src="https://box-games.pl/panelgracza/sygnatura_gracz.php?login=<?php echo $_GET['login']?>">
		<br>
		<br>
		BBCode (forum): 
		<form class="form-inline my-2 my-lg-0">
		<input style="width: 23em;" class="form-control mr-sm-2" id="inputKopiujBBCode" type="text" value="[img]https://box-games.pl/panelgracza/sygnatura_gracz.php?login=<?php echo $_GET['login']?>[/img]">
		<br>
		<button formaction="#" class="btn btn-outline-primary my-2 my-sm-0" value="Kopiuj" onclick="kopiujBBCode()">Kopiuj</button>
		</form>
		<br>
		BBCode (forum): 
		<form class="form-inline my-2 my-lg-0">
		<input style="width: 23em;" class="form-control mr-sm-2" id="inputKopiujHTML" type="text" value="<img src='https://box-games.pl/panelgracza/sygnatura_gracz.php?login=<?php echo $_GET['login']?>' width='444' height='171' alt='<?php echo $_GET['login']?>' />">
		<br>
		<button formaction="#" class="btn btn-outline-primary my-2 my-sm-0" value="Kopiuj" onclick="kopiujHTML()">Kopiuj</button>
		</form>
         <!-- // KONIEC SYGNATURA - ZAKŁADKA \\ -->	
         <div class="control-sidebar-bg shadow white fixed"></div>
      </div>
      <script src="skrypt/skrypt.js"></script>
   </body>
</html>

<!-- // Skrypt \\ -->

<script>
function kopiujBBCode() {
  var copyText = document.getElementById("inputKopiujBBCode");
  copyText.select();
  document.execCommand("copy");
}

function kopiujHTML() {
  var copyText = document.getElementById("inputKopiujHTML");
  copyText.select();
  document.execCommand("copy");
}
</script>