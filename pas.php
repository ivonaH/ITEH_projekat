<?php
	  
	   include_once('izgled.php');
	if($red->statuss!="admin"){	


	if(isset($_POST['rezervisi'])){//ako je pritisnuto dugme rezervisi poziva funkciju web servisa za rezervisanje
		$pas=$_GET["pasId"];
	$url = "http://localhost/kuce/rezervisi";

$data = array(
  'pas' => $pas,
  'datum' => $_POST['datum'],
  'korisnik' => $login_session,
);

$data1=json_encode($data);
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data1);

$json_response = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
$response = json_decode($json_response, true);
$odgovor = $response['poruka'];
echo $odgovor;
		}
		
$url = 'localhost/kuce/psi/'.$_GET["pasId"].'.json';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl, CURLOPT_POST, false);

$curl_odgovor = curl_exec($curl);
curl_close($curl);
$jsonobj = json_decode($curl_odgovor);
?>
<div class="card mb-3">
  <h3 class="card-header"><?php echo $jsonobj->psi[0]->ime?></h3>
  <div class="card-body">
    <h5 class="card-title">Rasa: <?php echo $jsonobj->psi[0]->nazivRase?></h5>
  </div>
  <img style="height: 100%; width: 100%; display: block;" src="<?php echo $jsonobj->psi[0]->slika; ?>" alt="Slika psa">
  <div class="card-body">
    <p class="card-text"><?php echo substr($jsonobj->psi[0]->opis, 0, 256)?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Pol: <?php echo $jsonobj->psi[0]->pol?></li>
    <li class="list-group-item">Starost: <?php echo $jsonobj->psi[0]->starost ?></li>
    <li class="list-group-item">Velicina: <?php echo $jsonobj->psi[0]->velicina ?></li>
    <li class="list-group-item">Trenutni vlasnik: <?php echo $jsonobj->psi[0]->vlasnik ?></li>
  </ul>
    <div class="card-footer text-muted">
    <?php 
if ($jsonobj->psi[0]->dostupnost=="da"){
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
 $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });

  });
  </script>
<form method="post" class="forma" style="margin-left:1cm;margin-right:1cm;float: left;">
<input type="text" id="datepicker" name="datum" placeholder="Datum koji zelite" style="color:black;padding:7px;margin-right:1cm;" required>
<input type="submit" class="btn btn-primary" name="rezervisi" value="Rezervišite ovog psa">

<?php
}
else{//ako nema dostupnog psa
?>	
<legend><h2 style="text-align:center;color:red;">Ovaj pas nije dostupan!</h2></legend> 
<?php
}
?>
  </div>
</div>

<?php }
  donjiDeo();
?>
