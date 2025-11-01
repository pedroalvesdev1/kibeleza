<section id="clientes" class="screen active">
    <h2>Clientes</h2>

    <div class="buttons">
        <button type="button" onclick="showTable('clientes')">Listar</button>
        <button type="button" onclick="showForm('clientes')">Cadastrar</button>
    </div>

    <!-- Inclusão da tabela de clientes -->
    <?php require_once('listarClientes.php'); ?>
    <?php require_once('inserirCliente.php'); ?>
</section>