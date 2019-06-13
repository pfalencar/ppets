<?php 

define('HOST', 'localhost');
define('USUARIO', 'patricia');
define('SENHA' ,'TheCGs@l10s');
define('DB', 'ppets');


$conn = new mysqli(HOST,USUARIO,SENHA,DB) or die('Conexão Falhou!');



