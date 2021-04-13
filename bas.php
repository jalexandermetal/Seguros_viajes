<?php

// conexion a base de datos
$servidor = "127.0.0.1"; //localhost
$usario = "root";
$password = "jhoan";
$basedb = "proyectos";
$mysql = new mysqli($servidor, $usuario, $password, $basedb) or die("error de conexion");

$sql="";


//
