<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("estrutura/head.php") ?>


<body>
    <?php require_once("template/header.php") ?>
    <main>
        <section class="tela-login">
            <div class="site">
                <div class="card-login">
                    <h2>Recuperar Senha</h2>
                    <p>Informe seu e-mail e defina uma nova senha</p>

                    <form action="<?php echo URL_BASE ?>index.php?url=login/atualizarSenha" method="POST">
                        <div class="campo">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required="">
                        </div>
                        <div class="campo">
                            <label for="senha1">Nova Senha</label>
                            <input type="password" id="senha1" name="senha1" placeholder="Digite sua nova senha" required="">
                        </div>
                        <div class="campo">
                            <label for="senha2">Confirmar Senha</label>
                            <input type="password" id="senha2" name="senha2" placeholder="Confirme sua nova senha" required="">
                        </div>
                        <div class="acoes">
                            <button type="submit">Alterar Senha</button>
                            <a href="<?php echo URL_BASE ?>index.php?url=login">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php require_once("template/footer.php") ?>
    <?php require_once("estrutura/script.php") ?>
</body>

</html>