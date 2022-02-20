<?php
function conexion($database,$user,$password){
    try{
        $conexionDB =  new PDO("mysql:host=localhost; dbname=$database",$user,$password);
        return $conexionDB;
    }
    catch(PDOException $e){
        echo "Error: ". $e->getMessage();
        return false;
    }
    
}