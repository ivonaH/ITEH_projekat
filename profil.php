<?php
include_once('izgled.php');

?>

<?php
	if($red->statuss!="admin"){	
?>
	  
<h2> Dobrodosli na stranicu namenjenu korisnicima</h2>
<br>
<div class="row">

<div class="card text-white bg-secondary mb-5" style="max-width: 50rem; margin-right:22px;">
<div class="card-header"><a href="ponuda.php" style="color:white; text-decoration: none;"><h3>Ponuda</h3></a></div>
  <div class="card-body">
  <a href="ponuda.php"><img src="img/urediPonudu.jpg" style="width:230px;height:230px;"/></a>
  </div>
</div>

<div class="card text-white bg-secondary mb-5" style="max-width: 50rem;">
<div class="card-header"><a href="dodajPsa.php" style="color:white; text-decoration: none;"><h3>Dodaj psa</h3></a></div>
  <div class="card-body">
  <a href="dodajPsa.php"><img src="img/novi.jpg" style="width:230px;height:230px;"/></a>
  </div>
</div>

<div class="card text-white bg-secondary mb-5" style="max-width: 50rem;  margin-right:22px;">
<div class="card-header"><a href="istorijaRezervacija.php" style="color:white; text-decoration: none;"><h3>Moje rezervacije</h3></a></div>
  <div class="card-body">
  <a href="istorijaRezervacija.php"><img src="img/svi.png" style="width:230px;height:230px;"/></a>
  </div>
</div>


<div class="card text-white bg-secondary mb-5" style="max-width: 50rem;">
<div class="card-header"><a href="logout.php" style="color:white; text-decoration: none;"><h3>Odjavi se</h3></a></div>
  <div class="card-body">
  <a href="logout.php"><img src="img/odjavi.jpg" style="width:230px;height:230px;"/></a>
  </div>
</div>
    
	
  </div>	  
<?php
}
else{
include("admin.php");
}
?>
</body>
</html>