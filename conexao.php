<?php
define('HOST', 'us-cdbr-iron-east-05.cleardb.net');
define('USUARIO', 'bc8613db8ebe8a');
define('SENHA', '63197245');
define('DB', 'heroku_d8f63e2df72b4ad');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
