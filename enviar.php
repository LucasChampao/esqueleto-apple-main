<?php
/*echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['mensagem'];


echo "NOME: $nome <br>";
echo "EMAIL: $email <br>";
echo "MENSAGEM: $msg <br>";
