<?php

$db = "EmpresaPatito";
$dbuser = "levinux";
$dbpass = "mocoseco";

$insertRegs = "insert into empleados values(?, ?, ?)";
$selectRegs = "select nombre, depto from empleados where id=?";
$deleteRegs = "delete from empleados where id=?";
$updateRegs = "update empleados set nombre=? where id=?";

?>
