<section id="funcionario" class="screen active">
    <h2>Funcionarios</h2>

    <div class="buttons">
        <button type="button" onclick="showTable('funcionario')">Listar</button>
        <button type="button" onclick="showForm('funcionario')">Cadastrar</button>
    </div>

    <!-- Inclusão da tabela de funcionarios -->
    <?php require_once('listarFuncionario.php'); ?>
</section>