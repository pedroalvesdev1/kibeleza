<section id="servico" class="screen">
    <h2>Serviços</h2>

    <div class="buttons">
        <button type="button" onclick="showTable('servico')">Listar</button>
        <button type="button" onclick="showForm('servico')">Cadastrar</button>
    </div>

    <?php require_once('listarServico.php'); ?>
    <?php require_once('inserirServico.php'); ?>
</section>