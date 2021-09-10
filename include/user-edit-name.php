<?
include_once './db.php';

editName($_POST['edinName']);

header('Location:/?route=edit'); 

?>