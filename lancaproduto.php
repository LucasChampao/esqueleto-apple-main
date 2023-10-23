<?php
include "header.php";
include "dados.php";

$id = $_GET["id"];

?>

<main>
    <div class="grid-2">
        <div class="coluna">
            <img src="imagens/<?= $lancamento[$id]["imagem"] ?>" alt="<?= $lancamento[$id]["nome"] ?>">
        </div>

        <div class="coluna">
            <h2>
                <?= $lancamento[$id]["nome"] ?>
            </h2>
            <p> R$ <?= $lancamento[$id]["valor"] ?>
            <p>
        </div>



    </div>

</main>


<?php
include "footer.php"
?>