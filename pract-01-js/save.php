<?php
require "config.php";
require "functions.php";

if(!isset($_POST['save'])) {
  echo "-1";
  return;
}

$nom = $_POST['nom'];
$depto = $_POST['depto'];

$db = opendb();
$st = $db->prepare($insertRegs);
$st->bindParam(1, $nom);
$st->bindParam(2, $depto);
$st->execute();

echo "$insertRegs\n";
echo "0";

?>
