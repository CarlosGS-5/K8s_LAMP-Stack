<?php

$link = mysqli_connect("db","root","secret","usuarios");

$SQL = "INSERT INTO clientes
 (
  nombre,
  apellidos,
  DNI
 )VALUES(
   'Carlos',
   'García',
   '01672368'
 )
";

$resp = mysqli_query($link , $SQL)or die(mysqli_error($link));
var_dump($resp);

?>
