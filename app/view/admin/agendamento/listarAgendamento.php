<table id="table-agendamentos" class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Funcionário</th>
            <th>Serviço</th>
            <th>Especialidade</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Status</th>
            <th>Observações</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($agendamentos)): ?>
            <?php foreach ($agendamentos as $agendamento): ?>
                <tr>
                    <td><?= $agendamento['id_agendamento'] ?></td>
                    <td><?= $agendamento['nome_cliente'] ?></td>
                    <td><?= $agendamento['nome_funcionario'] ?></td>
                    <td><?= $agendamento['nome_servico'] ?></td>
                    <td><?= $agendamento['nome_especialidade'] ?></td>
                    <td><?= $agendamento['data_agendamento'] ?></td>
                    <td><?= $agendamento['hora_agendamento'] ?></td>
                    <td><?= $agendamento['status_agendamento'] ?></td>
                    <td><?= $agendamento['observacoes'] ?></td>
                    <td class="actions">
                        <button class="edit">Alterar</button>
                         <a href="<?= URL_BASE ?>index.php?url=agendamento/deletarAgendamento&id=<?= $agendamento['id_agendamento'] ?>"
                        class="deletar"
                        onclick="return confirm('Deseja realmente excluir este agendamento? Esta ação não pode ser desfeita!')">
                        Excluir
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Nenhum agendamento encontrado.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>