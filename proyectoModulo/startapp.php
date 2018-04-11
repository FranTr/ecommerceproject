<?php

$root = "/proyectoModulo/";

/*************LIBRERIAS ***************************************/

require 'libs/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/src/SMTP.php';
require 'libs/funciones.php';

/*************CONEXION BBDD*********************************/

$serverName = "localhost"; //serverName\instanceName
$connectionInfo = array( "Database"=>"tienda", "UID"=>"sa", "PWD"=>"a");
$conexion = sqlsrv_connect( $serverName, $connectionInfo);

if( $conexion ) {
     
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

/*
    CONEXION A BASE DE DATOS EQUIPO CASA

$root = "/proyectoModulo/";

/*************LIBRERIAS ***************************************

require 'libs/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/src/SMTP.php';
require 'libs/funciones.php';

*************CONEXION BBDD*********************************

$serverName = "PEDRO-PC\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"tienda");
$conexion = sqlsrv_connect( $serverName, $connectionInfo);

if( $conexion ) {
     
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/
?>
