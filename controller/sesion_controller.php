<?php

include '../dao/dao.php';
include '../conf.php';
include '../dao/dao_session.php';
function strtoupper_utf8($string){
    $string=utf8_decode($string);
    $string=strtoupper($string);
    $string=utf8_encode($string);
    return $string;
}
session_start();

$dao = new dao(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$dao->conectar();
$daoSession = new daoSession($dao);

$nombre             = $_POST['inputNombre'];
$correo             = $_POST['inputEmail'];
$edificio           = $_POST['inputEdificio'];
$telefono           = $_POST['inputTelefono'];
$pass               = $_POST['inputPassword'];

if( $daoSession->crearUsuario($correo, $pass, $edificio, $nombre, $telefono)){
    $_SESSION['user'] = strtoupper_utf8($nombre);
    header('Location: ../index.php');
}



