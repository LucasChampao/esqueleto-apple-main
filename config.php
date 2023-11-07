<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vitrineapple";

try {
    $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=3306;charset=utf8;", $usuario, $senha);
} catch (\Exception $e) {
    echo "<p>ERRO AO TENTAR CONECTAR </p>";
    echo $e->getMessage();
}
