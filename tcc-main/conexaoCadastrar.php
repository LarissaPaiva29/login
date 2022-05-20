<?php

$servidor = "localhost";
$db = 'login';
$us = 'root';
$senha ='';


try{
        $banco = new PDO("mysql:host=".$servidor.";dbname=".$db, $us, $senha);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    

?>