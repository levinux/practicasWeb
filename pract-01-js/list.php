<?php
require "config.php";
require "functions.php";

if(!isset($_POST['list'])) {
  echo "-1";
  return;
}

$db = opendb();
$st = $db->prepare($selectRegs);
$st->execute();
$result = $st->fetchAll(PDO::FETCH_ASSOC);
$rows = array();

foreach($result as $row) {
	$rows[] = $row;
}

echo json_encode($rows);

?>
