<?php

include 'dao/dao.php';
include 'conf.php';
include 'dao/dao_servicio.php';

$id = $_GET['id'];

session_start();

$dao = new dao(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$dao->conectar();
$daoServicio = new daoServicio($dao);

$Descripciones = $daoServicio->getDescripciones($id);
$servicio = $daoServicio->getServicio($id);




