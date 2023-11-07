<?php
include "header.php";
include "config.php";

$id = $_GET["codigo"];

if (!empty($id)) { // SE CASO NÃO FOR VAZIO - (!EMPTY) [ EMPTY = VERIFICA SE O VALOR É VAZIO ], ELE EXECUTA.
    
    $sql = "select * from lancamento where codigo = $id"; 
    $consulta = $pdo->prepare($sql);
    $consulta->execute();
    //print_r($consulta); // ( exit ) impede de mostrar qualquer coisa, alem dessa linha.

    $lancamento = $consulta->fetch(PDO::FETCH_ASSOC);
}


?>

<main>
    <div class="grid-2">
        <div class="coluna">
            <img src="imagens/<?= $lancamento["imagem"] ?>" alt="<?= $lancamento["nome"] ?>">
        </div>

        <div class="coluna">
            <h2>
                <?= $lancamento["nome"] ?>
            </h2>
            <p> R$ <?= $lancamento["valor"] ?>
            <p>
        </div>



    </div>

</main>


<?php
include "footer.php"
?>