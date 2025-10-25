<section id="funcionarios" class="screen active">
    <h2>Funcionarios</h2>

    <div class="buttons">
        <button type="button" onclick="showTable('funcionarios')">Listar</button>
        <button type="button" onclick="showForm('funcionarios')">Cadastrar</button>
    </div>

    <!-- Inclusão da tabela de funcionarios -->
    <?php require_once('listarFuncionario.php'); ?>
    <!-- Inclusão do formulário de cadastro/edição de funcionarios -->
    <?php require_once('inserirFuncionario.php'); ?>
</section>