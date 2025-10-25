<table id="table-especialidade" class="data-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Status</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($especialidades)): ?>
      <?php foreach ($especialidades as $especialidade): ?>
        <tr>
          <td><?= $especialidade['id_especialidade'] ?></td>
          <td><?= $especialidade['nome_especialidade'] ?></td>
          <td><?= $especialidade['descricao_especialidade'] ?></td>
          <td><?= $especialidade['status_especialidade'] ?></td>
           <td class="actions">
                        <button class="edit">Alterar</button>
                        <button class="delete">Excluir</button>
                    </td>
        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="4">Nenhuma especialidade encontrada.</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>