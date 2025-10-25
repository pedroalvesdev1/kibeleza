<form id="form-agendamentos" class="data-form" method="POST" action="<?= URL_BASE ?>index.php?url=agendamento/inserirAgendamento">
    <input type="hidden" name="id_agendamento">

    <div>
        <select name="id_cliente" required>
            <option value="">Selecione o Cliente</option>
            <?php if (!empty($clientes)): ?>
                <?php foreach($clientes as $cliente): ?>
                    <option value="<?= $cliente['id_cliente'] ?>"><?= $cliente['nome_cliente'] ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>

        <select name="id_funcionario" required>
            <option value="">Selecione o Funcionário</option>
            <?php if (!empty($funcionarios)): ?>
                <?php foreach($funcionarios as $funcionario): ?>
                    <option value="<?= $funcionario['id_funcionario'] ?>"><?= $funcionario['nome_funcionario'] ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select> 
    </div>

    <select name="id_servico" required>
        <option value="">Selecione o Serviço</option>
        <?php if (!empty($servicos)): ?>
            <?php foreach($servicos as $servico): ?>
                <option value="<?= $servico['id_servico'] ?>"><?= $servico['nome_servico'] ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select> 

    <input type="date" name="data_agendamento" placeholder="Data do Agendamento" required>
    <input type="time" name="hora_agendamento" placeholder="Horário do Agendamento" required>

    <select name="status_agendamento" required>
        <option value="Agendado">Agendado</option>
        <option value="Cancelado">Cancelado</option>
    </select>

    <input type="text" name="observacao_agendamento" placeholder="Observações" required>

    <button type="submit">Salvar</button>
    <button type="button" onclick="showTable('agendamentos')">Cancelar</button>
</form>