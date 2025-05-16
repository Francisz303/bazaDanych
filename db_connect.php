<?php

ini_set('display_errors',1);
ini_set('display_stratup_errors',1);
error_reporting(E_ALL);

require_once 'config.php';

$connect = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);



// echo '<hr>'.$connect->connect_errno;

if ($connect->connect_error){
    die('Błąd połączenia: '.$connect->connect_error);
}

