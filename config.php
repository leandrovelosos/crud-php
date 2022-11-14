<?php 
    //define('HOST', 'localhost');
    //define('USER', 'root');
    //define ('PASS', 'osover14e');
    //define('BASE', 'cadastro');



//$conn = new MySQLi(HOST, USER, PASS, BASE);

$HOST = "localhost";
$BASE = "cadastro";
$USER = "root";
$PASS = "osover14e";
$CRIPT = md5($PASS);
echo $CRIPT;
# Cria a conexão
$conn = mysqli_connect($HOST, $USER, $PASS, $BASE);
# Verifica a conexão


?>