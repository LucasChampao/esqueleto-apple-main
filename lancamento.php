<?php
include "header.php";
include "dados.php";

?>


<main>
    <h1>Lançamento: </h1>
    <div class="grid">
        <?php
        foreach($lancamento as $lanca){
        ?>

            <div class="coluna">
                <img src="imagens/<?= $lanca['imagem'] ?>" alt="<?= $lanca['nome'] ?>">

                <p>
                    <strong> <?= $lanca['nome'] ?></strong><br>
                    R$ <?= $lanca['valor'] ?>
                </p>

                <p>
                    <a href="lancaproduto.php?id=<?= $lanca["id"] ?>">Detalhes</a>
                </p>
            </div>
            
        <?php
        }
        ?>

    </div>
</main>


<?php
include "footer.php"
?>