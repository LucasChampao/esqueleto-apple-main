<?php
include "header.php";
?>


<main>
    <h1>Entre em Contato:</h1>
    <form name="form1" method="post" action="enviar.php">

        <label for="nome">Seu nome:</label>
        <input type="text" name="nome" id="nome" >
        <br>
        <label for="email">Seu e-mail:</label>
        <input type="text" name="email" id="email" >
        <br>
        <label for="mensagem">Sua mensagem:</label>
        <textarea name="mensagem" rows="5"></textarea>
        <br>
        <button type="submit" class="btn btn-outline-success">Enviar Mensagem</button>

    </form>
</main>

<?=
include "footer.php";
?>
