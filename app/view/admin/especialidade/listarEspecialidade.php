<table id="table-especialidades" class="data-table">
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
            <a href="<?= URL_BASE ?>index.php?url=especialidade/deletarEspecialidade&id=<?= $especialidade['id_especialidade'] ?>"
              class="deletar"
              onclick="return confirm('Deseja realmente excluir este especialidade? Esta ação não pode ser desfeita!')">
              Excluir
            </a>
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