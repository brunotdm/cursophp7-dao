<?php

require_once("config.php");

$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM usuarios");

$rawQuery = "SELECT * FROM usuarios";
$usuarios = $sql->select($rawQuery);

echo json_encode($usuarios);
