<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require_once('estrutura/head.php'); ?>
    <link rel="stylesheet" href="<?php URL_BASE ?>assets/css/admin.css">
</head>
<body>
    <div class="dashboard">
        <!-- Menu Lateral -->
         <nav class="sidebar">
            <div class="sidebar-header">
                <img src="<?php URL_BASE ?>assets/img/perfilFoto.png" alt="Foto do usuário" class="user-photo">
                <h3>Pedro</h3>
                <button id="logout" onclick="window.location.href='<?= URL_BASE ?>index.php?url=home'">
                    <img src="<?php URL_BASE ?>assets/img/logout.png" alt="logout">
                </button>
            </div>
            <ul class="menu">
                <li><a href="<?= URL_BASE ?>index.php?url=cliente">Clientes</a></li>
                <!-- <li data-screen="clientes">Clientes</li> -->
                <li><a href="<?= URL_BASE ?>index.php?url=funcionario">Funcionários</a></li>
                <!-- <li data-screen="funcionarios">Funcionários</li> -->
                <li><a href="<?= URL_BASE ?>index.php?url=especialidade">Especialidades</a></li>
                <!-- <li data-screen="especialidades">Especialidades</li> -->
                <li><a href="<?= URL_BASE ?>index.php?url=servico">Serviços</a></li>
                <!-- <li data-screen="servicos">Serviços</li> -->
                <li><a href="<?= URL_BASE ?>index.php?url=agendamento">Agendamento</a></li>
                <!-- <li data-screen="agendamento">Agendamento</li> -->
            </ul>
         </nav>

         <!-- Conteúdo Central -->
         <main class="main-content">
            <?php 
            if (isset($conteudo)) {
                $this->carregarViews($conteudo, $dados);
            } else {
                echo "<p>Bem-vindo ao Dashboard</p>";
            }
            ?>
         </main>
    </div>

    <footer>
        Desenvolvido por: Pedro Alves da Silva- ADS - Universidade Brasil - 2025
    </footer>
    <script src="<?php URL_BASE ?>assets/js/admin.js"></script>
</body>

</html>
