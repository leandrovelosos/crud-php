<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define (#[SensitiveParameter] 'PASS', 'osover14e');
    define('BASE', 'cadastro');

$conn = new MySQLi(HOST, USER, PASS, BASE);

?>