<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("estrutura/head.php") ?>

<body>
    <?php require_once("template/header.php") ?>
    <main>
        <section class="tela-login">
            <div class="site">
                <?php if (!empty($dados['erro_login'])): ?>
                    <div class="mensagem-erro">
                        <p><?= $dados['erro_login']; ?></p>
                    </div>
                <?php elseif (!empty($dados['msg_sucesso'])): ?>
                    <div class="mensagem-sucesso">
                        <p><?= $dados['msg_sucesso']; ?></p>
                    </div>
                <?php endif; ?>
                <div class="card-login">
                    <h2>Área Restrita</h2>
                    <p>Faça login para acessar o painel administrativo</p>

                    <form action="<?php echo URL_BASE ?>index.php?url=login/autenticar" method="POST">
                        <div class="campo">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                        </div>
                        <div class="campo">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                        </div>
                        <div class="acoes">
                            <button type="submit">Entrar</button>
                            <a href="<?php echo URL_BASE ?>index.php?url=recuperar">Esqueci minha senha</a>
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