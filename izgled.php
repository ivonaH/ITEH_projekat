<?php
include_once("session.php");
include_once('database.php');
$db->prikaziKorisnika($login_session);
$red=$db->getResult()->fetch_object();

gornjiDeo($login_session,$red->statuss);

function gornjiDeo($user,$status){
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "php_logs.log");

?>
<!DOCTYPE html>
<head>
<title>Udomljavanje pasa </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/sketchy/bootstrap.min.css" rel="stylesheet" integrity="sha384-N8DsABZCqc1XWbg/bAlIDk7AS/yNzT5fcKzg/TwfmTuUqZhGquVmpb5VvfmLcMzp" crossorigin="anonymous">
    <script src="js/jquery-1.11.2.min.js"></script>
<script src="DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>
<script src="jeditable/jquery.jeditable.js"></script>
<script src="DataTables-1.10.4/extensions/editable/jquery.dataTables.editable.js"></script>
      

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-left:10px; margin-right:10px;">
  <a class="navbar-brand" href="index.php">Udomljavanje pasa </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php 
 if($status!='admin'){?>
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      
        <a class="nav-link" href="profil.php">Početna strana</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ponuda.php">Ponuda</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="dodajPsa.php">Dodaj psa </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="istorijaRezervacija.php">Moje rezervacije</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Odjavi se</a>
      </li>
      </ul>
      <span class="nav-item" text-align="right">
        <a class="nav-link" href="profil.php"><?php echo "Ulogovani ste kao ".$user?></a>
      </span>
  </div>
</nav>


<?php
}else{?>
  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      
        <a class="nav-link" href="profil.php">Početna strana</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="urediPonudu.php">Uredi ponudu</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="dodajPsa.php">Dodaj psa </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="spisakRezervacija.php">Sve rezervacije</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="grafik.php">Statistika</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Odjavi se</a>
      </li>
      </ul>
      <span class="nav-item" text-align="right">
        <a class="nav-link" href="profil.php"><?php echo "Ulogovani ste kao ".$user?></a>
      </span>
  </div>
</nav>
<?php } ?>
<div style="background-image: url('img/sapice.jpg');">
<br>
<br>
   <div class="jumbotron" style="margin-left:150px; margin-right:150px; background-color:gray">
  <div class="container">
   <div class="row">
  
  <div class="col-md-2 col-ld-2"></div>
  <div class="col-md-7 col-ld-7">
  <?php
  
}
function donjiDeo(){
    ?>
</div>
  <div class="col-md-2 col-ld-2"></div>
  </div>
</div>
</div>
</body>

</html>



    <?php
}
  ?>
  