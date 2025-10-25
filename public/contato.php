<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("estrutura/head.php") ?>
<head>
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<body>
    <!-- Início Cabeçalho -->
    <?php require_once("template/header.php") ?>
    <!-- Fim Cabeçalho -->

    <!-- Início Conteúdo -->
    <main>
        <?php require_once("template/banner.php") ?>

        <section class="site" id="form">
            <h2>contato</h2>
            <form class="contato-form" action="email.php" method="POST">
                <div class="info-c">
                    <label>Nome</label>
                    <input type="text" name="nome" placeholder="Nome" required>
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="E-mail" required>
                    <label>Telefone</label>
                    <input type="tel" name="telefone" placeholder="Telefone" required>
                </div>
                <div class="menssage">
                    <label>Mensagem</label>
                    <textarea name="mensagem" placeholder="Mensagem" rows="5" required></textarea>
                    <div class="boton">
                        <button type="submit">Enviar</button>
                        <button type="reset">Limpar</button>
                    </div>
                </div>
            </form>
        </section>

        <!-- GALERIA -->
        <?php require_once("template/galeria.php") ?>
    </main>
    <!-- Fim Conteúdo -->

    <!-- Início Rodapé -->
    <?php require_once("template/footer.php") ?>
    <!-- Fim Rodapé -->

    <?php require_once("estrutura/script.php") ?>
</body>

</html>