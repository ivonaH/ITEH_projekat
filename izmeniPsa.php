<?php
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "php_logs.log");
include "konekcija.php";
$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);
if ($mysqli->connect_error) {
    die("err");
} 

switch ($_REQUEST ['columnId']){
	case 1:
		
		$sql = "UPDATE pas SET ime='".$_REQUEST['value']."' WHERE pasID='".$_REQUEST['id']."'";
	break;
	case 6:
		$sql = "UPDATE pas SET opis='".$_REQUEST['value']."' WHERE pasID='".$_REQUEST['id']."'";
	break;
	case 3:
		$sql = "UPDATE pas SET starost='".$_REQUEST['value']."' WHERE pasID='".$_REQUEST['id']."'";
	break;
	case 4:
		$sql = "UPDATE pas SET velicina='".$_REQUEST['value']."' WHERE pasID='".$_REQUEST['id']."'";
	break;
	case 8:
		$sql = "UPDATE pas SET dostupnost='".$_REQUEST['value']."' WHERE pasID='".$_REQUEST['id']."'";
	break;

}
if ($mysqli->query($sql) === TRUE) {
    echo $_REQUEST["value"];
} else {
    echo "Nije izvrseno!";
}

$mysqli->close();

?>