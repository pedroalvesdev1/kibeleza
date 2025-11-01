<table id="table-servico" class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Duração (min)</th>
            <th>Preço</th>
            <th>Especialidade</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($servicos)): ?>
            <?php foreach ($servicos as $servico): ?>
                <tr>
                    <td><?= $servico['id_servico'] ?></td>
                    <td><?= $servico['nome_servico'] ?></td>
                    <td><?= $servico['descricao_servico'] ?></td>
                    <td><?= $servico['duracao_servico'] ?></td>
                    <td><?= $servico['preco_servico'] ?></td>
                    <td>
                        <?php
                        foreach ($especialidades as $esp) {
                            if ($esp['id_especialidade'] == $servico['id_especialidade']) {
                                echo $esp['nome_especialidade'];
                                break;
                            }
                        }
                        ?>
                    </td>

                    <td><?= $servico['status_servico'] ?></td>
                    <td class="actions">
                        <a href="#"
                        class="editar"
                        data-id="<?= $servico['id_servico'] ?>"
                        data-nome="<?= $servico['nome_servico'] ?>"
                        data-descricao="<?= $servico['descricao_servico'] ?>"
                        data-duracao="<?= $servico['duracao_servico'] ?>"
                        data-preco="<?= $servico['preco_servico'] ?>"
                        data-especialidade="<?= $servico['id_especialidade'] ?>"
                        data-status="<?= $servico['status_servico'] ?>"
                        onclick="editarServico(this)"
                        >Alterar
                    </a>
                        <a href="<? URL_BASE ?>index.php?url=servico/deletarServico&id=<?= $servico['id_servico'] ?>" class="deletar" onclick="return confirm ('Deseja realmente excluir este serviço? Está ação não pode ser desfeita!')">
                            Excluir
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Nenhum serviço encontrado.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>