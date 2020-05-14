<?php
include("const.php");

if(!isset($_POST['save'])) {
  echo "-1";
  return;
}

$id = $_POST['id'];
$nom = $_POST['nom'];
$depto = $_POST['depto'];

$db = opendb();
$db->exec(sprintf($insertRegs, $id, $nom, $depto));
$db->close();
echo "0";

?>
