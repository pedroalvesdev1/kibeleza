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
                <a href="<?= URL_BASE ?>index.php?url=dash">
                    <li>Dashboard</li>
                </a>
                <a href="<?= URL_BASE ?>index.php?url=cliente">
                    <li>Clientes</li>
                </a>
                <a href="<?= URL_BASE ?>index.php?url=funcionario">
                    <li>Funcionários</li>
                </a>
                <a href="<?= URL_BASE ?>index.php?url=especialidade">
                    <li>Especialidades</li>
                </a>
                <a href="<?= URL_BASE ?>index.php?url=servico">
                    <li>Serviços</li>
                </a>
                <a href="<?= URL_BASE ?>index.php?url=agendamento">
                    <li>Agendamento</li>
                </a>
            </ul>
        </nav>

        <!-- Conteúdo Central -->
        <main class="main-content">
            <?php
            if (isset($conteudo)) {
                $this->carregarViews($conteudo, $dados);
            } else {
            ?>
                <div class="cards-container">
                    <div class="card">
                        <h2>Clientes</h2>
                        <p><?= $totalClientes ?></p>
                    </div>

                    <div class="card">
                        <h2>Serviços</h2>
                        <p><?= $totalServico ?></p>
                    </div>

                    <div class="card">
                        <h2>Funcionários</h2>
                        <p><?= $totalFuncionario ?></p>
                    </div>

                    <div class="card">
                        <h2>Especialidades</h2>
                        <p><?= $totalEspecialidade ?></p>
                    </div>

                    <div class="card">
                        <h2>Agendamentos</h2>
                        <p><?= $totalAgendamentos ?></p>
                    </div>

                </div>
            <?php
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