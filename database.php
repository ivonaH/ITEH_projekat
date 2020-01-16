<?php
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "php_logs.log");

define('SALT', '!"#$%&/()=$%DFGBHJfghJ$%677$%');
class Database {
	private $hostname = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "baza";
	private $dblink;
	private $result = true;
	private $records;
	private $affectedRows;


	function __construct($dbname)
	{
		$this->$dbname = $dbname;
		$this->Connect();
	}
	
	public function getResult()
	{
		return $this->result;
	}
	
	function __destruct()
	{
	$this->dblink->close();
	//echo "Konekcija prekinuta";
	}
	
	function Connect()
	{
		$this->dblink = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
		if($this->dblink->connect_errno)
		{
			printf("Konekcija neuspesna: %s\n",  $mysqli->connect_error);
			exit();
		}
		$this->dblink->set_charset("utf8");
	}

	
function dajRezervacije($login_session){
	$sql = "SELECT * FROM rezervacija r INNER JOIN pas p ON (r.pasID=p.pasID) JOIN rasa on (rasa.rasaId=p.rasaId) WHERE korisnik='".$login_session."'";
$this->ExecuteQuery($sql);
	}
	function dajSveRezervacije(){
		$sql = "SELECT *, p.ime as imePsa FROM rezervacija r INNER JOIN pas p ON (r.pasID=p.pasID) INNER JOIN korisnici k ON (r.korisnik=k.korisnickoime) JOIN rasa on (rasa.rasaId=p.rasaId)";
	
	$this->ExecuteQuery($sql);
		}		

	function traziPremaId($id) {
		
		$this->dblink->query("SET NAMES 'utf8'");
		$podatak=mysqli_real_escape_string($this->dblink,$id);
		$q = "SELECT * FROM pas p JOIN rasa r ON r.rasaId=p.rasaId WHERE pasID=$id";
		$this->ExecuteQuery($q);
	}	
	
	function prikaziPse() {
		$q = "SELECT * FROM pas join rasa r on (r.rasaId=pas.rasaId)";
		$this->ExecuteQuery($q);
	}	

	function login($podatak,$podatak1) {
		$podatak =  $this->dblink->real_escape_string($podatak);
$podatak1 =  $this->dblink->real_escape_string($podatak1);
$podatak = md5(SALT . md5($podatak));
		$q = "select * from korisnici where sifra='$podatak' AND korisnickoime='$podatak1'";
		$this->ExecuteQuery($q);
	}
	function prikaziKorisnika($podatak) {
		$this->dblink->set_charset("utf8");
		$podatak= $this->dblink->real_escape_string($podatak);
		$q = "SELECT * FROM korisnici WHERE korisnickoime='$podatak'";
		$this->ExecuteQuery($q);
	}

	function delete ($table,  $keys, $values)
{
$delete = "DELETE FROM ".$table." WHERE ".$keys[0]." = '".$values[0]."'";

if ($this->ExecuteQuery($delete))
return true;
else return false;
}

function insert ($table, $rows, $values)
{
$query_values = implode(',',$values);
$insert = 'INSERT INTO '.$table;  
            if($rows != null)  
            {  
                $insert .= ' ('.$rows.')';   
            }  
			$insert .= ' VALUES ('.$query_values.')';
			
if ($this->ExecuteQuery($insert))
return true;
else return false;
}
	public function registracijaKorisnika($podaci)
	{	

$prvi=mysqli_real_escape_string($this->dblink,$podaci[0]);
$drugi=mysqli_real_escape_string($this->dblink,$podaci[1]);
$drugi = md5(SALT . md5($drugi));
$treci=mysqli_real_escape_string($this->dblink,$podaci[2]);
$cetvrti=mysqli_real_escape_string($this->dblink,$podaci[3]);
$peti=mysqli_real_escape_string($this->dblink,$podaci[4]);
$sesti=mysqli_real_escape_string($this->dblink,$podaci[5]);
$sql = "INSERT INTO korisnici (korisnickoime, sifra,ime, prezime,email, datumregistracije) VALUES 
('". $prvi."', '".$drugi."', '".$treci."', '". $cetvrti."', '". $peti."', '". $sesti."')";
if ($this->ExecuteQuery($sql))
return true;
else return false;
 }

 function update($data) {
	$query = "UPDATE pas SET opis='". $data[1]. "',ime='".$data[2]."' WHERE pasID ='" .$data[0]."'";	
		
	if($this->ExecuteQuery($query))
	{
		return true;
	}
	else
	{
		return false;
	}
	$mysqli->close();
}

function updateDostupnost($pasId) {
	$query = "UPDATE pas SET dostupnost='ne' WHERE pasID =" .$pasId;	
		
	if($this->ExecuteQuery($query))
	{
		return true;
	}
	else
	{
		return false;
	}
	$mysqli->close();
}

	function ubaciPsa ($podaci)
{
$ime=mysqli_real_escape_string($this->dblink,$podaci[0]);
$rasaId=mysqli_real_escape_string($this->dblink,$podaci[1]);
$opis=mysqli_real_escape_string($this->dblink,$podaci[2]);
$starost=mysqli_real_escape_string($this->dblink,$podaci[3]);
$velicina=mysqli_real_escape_string($this->dblink,$podaci[4]);
$pol=mysqli_real_escape_string($this->dblink,$podaci[5]);
$slika=mysqli_real_escape_string($this->dblink,$podaci[6]);
$vlasnik=mysqli_real_escape_string($this->dblink,$podaci[7]);


#$sql = "INSERT INTO pas (ime, rasaId, opis,starost,velicina,pol, slika) VALUES ('". $ime."', '". $rasa."','". $opis."','". $starost."','". $velicina."','". $pol."','". $slika."')";
$sql = "INSERT INTO pas (ime, rasaId, opis,starost,velicina,pol, slika, vlasnik) VALUES ('". $ime."', ".$rasaId.",'". $opis."','". $starost."','". $velicina."','". $pol."','". $slika."','".$vlasnik."')";
echo $sql;
if ($this->ExecuteQuery($sql))
return true;
else return false;
}
function dajRase() {
	$q = "SELECT * FROM rasa";
	$this->ExecuteQuery($q);
}
	function dajPse() {
		
		$q = "SELECT * FROM pas";	
		$this->ExecuteQuery($q);	
}

function dajKorisnike() {
		
	$q = "SELECT * FROM korisnici";	
	$this->ExecuteQuery($q);	
}
	function ExecuteQuery($query)
	{
		if($this->result = $this->dblink->query($query)){
			if (isset($this->result->num_rows)) $this->records         = $this->result->num_rows;
				if (isset($this->dblink->affected_rows)) $this->affected        = $this->dblink->affected_rows;
					// echo "Uspesno izvrsen upit";
					return true;
		}	
		else{
			return false;
		}
	}
}
?>

<?php
include('jsonindent.php');
?>
