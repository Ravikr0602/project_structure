<?php

try {
    $con = @mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
    if(mysqli_connect_errno()){
        throw new Exception(mysqli_connect_errno());	
    }
} catch (Exception $e) {
    include("404.php");
    exit(1);
}