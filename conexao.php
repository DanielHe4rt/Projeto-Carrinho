<?php
// Informação de Conexão 
define ('DB_HOST','localhost');
define ('DB_USUARIO','root');
define ('DB_SENHA','');
define ('DB_DATABASE','');
define ('DB_CHARSET','utf8');

// Conexão BD
$mysqli = new mysqli(DB_HOST, DB_USUARIO, DB_SENHA, DB_DATABASE);

// Testar Erros
if($mysqli ->connect_errno){
    echo "Erro na conexão: ".$mysqli->connect_errno;
    echo "<br>".$mysqli->connect_error;
}

// Alterar caracter para utf8
$mysqli ->set_charset(DB_CHARSET);
// Modifica a zona de horário para o horário de SP
date_default_timezone_set('America/Sao_Paulo');