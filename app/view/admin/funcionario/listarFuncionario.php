<table id="table-funcionario" class="data-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>Email</th>
      <th>Cargo</th>
      <th>Status</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($funcionarios)): ?>
      <?php foreach ($funcionarios as $funcionario): ?>
        <tr>
          <td><?= $funcionario['id_funcionario']  ?></td>
          <td><?= $funcionario['nome_funcionario']  ?></td>
          <td><?= $funcionario['telefone_funcionario']  ?></td>
          <td><?= $funcionario['email_funcionario']  ?></td>
          <td><?= $funcionario['cargo_funcionario']  ?></td>
          <td><?= $funcionario['status_funcionario']  ?></td>
           <td class="actions">
                        <button class="edit">Alterar</button>
                        <button class="delete">Excluir</button>
                    </td>
        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="6">Nenhum funcionário encontrado.</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table> 