<?php
//Dados do banco
$db_name="clientes_db";
$db_host="localhost:3306";
$db_user="root";
$db_pass="";

//Conexao
try{
    $conn=mysqli_connect($db_host, $db_user, $db_pass, $db_name);
}
catch (\Throwable $th) {
    throw $th;
}
?>