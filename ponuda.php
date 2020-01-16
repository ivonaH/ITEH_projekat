<?php
    include_once("izgled.php");
    

	if($red->statuss!="admin"){	
?>

<h1 style="text-align:center;color:white;">Ponuda pasa</h1>
<hr>

		<?php 
         $url = 'localhost/kuce/psi.json';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($curl, CURLOPT_POST, false);

$curl_odgovor = curl_exec($curl);
curl_close($curl);
$jsonobj = json_decode($curl_odgovor);


	 ?>
	 
     <div class="row">
<?php foreach ($jsonobj->pas as $p):  ?>
<div class="card text-white bg-secondary mb-5" style="max-width: 17rem; margin-right:10px;">
<div class="card-header"><a href="pas.php?pasId=<?php echo $p->pasID?>" style="color:white; text-decoration: none;"><h3><?php echo $p->ime?></h3></a></div>
  <div class="card-body">
  <a href="pas.php?pasId=<?php echo $p->pasID?>"><img src="<?php echo $p->slika; ?>" style="width:230px;height:230px;"/></a>
  </div>
</div>
<?php endforeach;
    }?>
</div>
    <?php
donjiDeo();
?>
 
