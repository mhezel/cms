<?php

/*$db_server = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'db_cms';*/

$db['db_server'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "root";
$db['db_name']= "db_cms";

    foreach($db as $key => $value){

        define(strtoupper($key), $value); 
    }
        $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

    //$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
   //$conn = mysqli_connect('localhost','root','root','db_cms');

    if(!$conn){
        echo "unable to connect to the database";
    }
?>
