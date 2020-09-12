<?php
// Informação de Conexão 
define ('DB_HOST','localhost');
define ('DB_USUARIO','danielhe4rt');
define ('DB_SENHA','');
define ('DB_DATABASE','dev_vaicaralho');
define ('DB_CHARSET','utf8');

// Conexão BD
try{
    $pdo = new PDO(sprintf("mysql:host=%s;dbname=%s",DB_HOST, DB_DATABASE), "danielhe4rt", "");
} catch(PDOException $e) {
    echo $e->getMessage();
}

