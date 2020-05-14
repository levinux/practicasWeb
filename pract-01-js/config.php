<?php

$dbuser = "levinux";
$dbpass = "mocoseco";
$dbname = "EmpresaPatito";
$dsn = "mysql:host=localhost;dbname=" . $dbname;

$insertRegs = "insert into empleados(nombre,depto) values(?, ?)";
$selectRegs = "select id, nombre, depto from empleados";
$deleteRegs = "delete from empleados where id=?";
$updateRegs = "update empleados set nombre=? where id=?";

?>
