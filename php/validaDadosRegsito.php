<?php

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$welcome = "Bem vindo $nome $apelido"; 
echo "<Script>alert($welcome);</Script>";

?>