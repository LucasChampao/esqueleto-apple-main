<?php
include "header.php";
include "config.php";

$sql = "select * from lancamento";
$consulta = $pdo->prepare($sql);
$consulta->execute();

$lancamento = $consulta->fetchAll(PDO::FETCH_ASSOC); // variavel onde a consulta do sql está armazenada !!

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
                    <a href="lancaproduto.php?codigo=<?= $lanca["codigo"] ?>">Detalhes</a>
                </p>
            </div>
            
        <?php
        };
        ?>

    </div>
</main>


<?php
include "footer.php"
?>