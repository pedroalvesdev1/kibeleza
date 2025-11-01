<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("estrutura/head.php") ?>

<body>
    <!-- Início Cabeçalho -->
    <?php require_once("template/header.php") ?>
    <!-- Fim Cabeçalho -->

    <!-- Início Conteúdo -->
    <main>
        <?php require_once("template/banner.php") ?>
        <!-- sobre -->
        <?php require_once("template/sobre.php") ?>
        <!-- EQUIPE -->
        <?php require_once("template/equipe.php") ?>
        <!-- SERVIÇO -->
        <?php require_once("template/servico.php") ?>
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