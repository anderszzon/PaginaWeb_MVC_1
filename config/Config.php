<?php

// define("Base_url", "http://http://localhost/tiendavirtual/")

const Base_url="http://localhost/PHP_MVC_POO_MySQL/"; // quite el / al final

//Establecer zona horaria 
date_default_timezone_set('America/Bogota');

//variables de conexion de base de datos 

const DB_HOST ="localhost";
const DB_NAME = "db_tiendavirtual";
const DB_USER ="root";
const DB_PASSWORD ="";
const DB_CHARSET = "charset=utf8"; //decodificador de base de datos 

//Delimitadores decimal y millar ejemplo:  23,121.09

const SPD ="."; //separador de decimales
const SPM = ","; // separador de millares


//simbolo de moneda 
const SMONEY ="$";
?>