<?php 

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA' ,'');
define('DB', 'ppets');


$conn = new mysqli(HOST,USUARIO,SENHA,DB) or die('Conexão Falhou!');



