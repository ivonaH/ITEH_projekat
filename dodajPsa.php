<?php
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "php_logs.log");

include_once("izgled.php");

?>


<body>
       
<h1>Dodaj psa </h1>
<hr>

<div id="dodavanje">
  <form role="form" action="upload.php" method="post" enctype="multipart/form-data">
 
 <div class="form-group">
      <label for="ime">Ime psa:</label>
      <input name="ime"type="text" class="form-control" id="ime" placeholder="Unestite ime psa" required>
    </div>
    <div class="form-group">
	 <label for="rasa">Rasa psa:</label><br>
  <select id="rasaId" name="rasaId" style="width:100%;color:black;padding:10px;"> 
  <?php
  $db->dajRase();
  

      while($red=$db->getResult()->fetch_object()){?>
    <option value='<?php echo $red->rasaId; ?>'>
    <?php echo $red->nazivRase; ?></option>
    <?php
    }
    ?>
</select>

 </div>
 <div class="form-group">
	 <label for="pol">Izaberi pol psa:</label><br>
  <select id="pol" name="pol" style="width:100%;color:black;padding:10px;"> 
<option value="muski">Muski</option>
<option value="zenski">Zenski</option>
</select>
 </div>
 <div class="form-group">
      <label for="starost">Starost psa:</label>
      <input name="starost"type="text" class="form-control" id="starost" placeholder="Unesite starost psa" required>
    </div>
    <div class="form-group">
      <label for="velicina">Velicina psa:</label>
      <input name="velicina"type="text" class="form-control" id="velicina" placeholder="Unestite velicinu psa" required>
    </div>
	<div class="form-group">
      <label for="opis">Opis:</label>
      <input name="opis"type="text" class="form-control" id="opis" placeholder="Unesite opis psa" required>
    </div>
		
	Fotografija <br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
  <br>
  <button type="submit" name="submit" class="btn btn-secondary">Dodaj novog psa</button>

  </form>
</div>


<?php donjiDeo();?>
