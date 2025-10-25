<section id="agendamentos" class="screen active">
    <h2>Agendamento</h2>

    <div class="buttons">
        <button type="button" onclick="showTable('agendamentos')">Listar</button>
        <button type="button" onclick="showForm('agendamentos')">Cadastrar</button>
    </div>

    <?php require_once('listarAgendamento.php'); ?>
    <?php require_once('inserirAgendamento.php'); ?>
</section>