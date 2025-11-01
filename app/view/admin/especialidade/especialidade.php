<section id="especialidades" class="screen active">
    <h2>Especialidade</h2>

    <div class="buttons">
        <button type="button" onclick="showTable('especialidades')">Listar</button>
        <button type="button" onclick="showForm('especialidades')">Cadastrar</button>
    </div>

    <?php require_once('listarEspecialidade.php'); ?>
    <?php require_once('inserirEspecialidade.php'); ?>
</section>