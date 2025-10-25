<table id="table-clientes" class="data-table">     
    <thead>         
        <tr>             
            <th>ID</th>             
            <th>Nome</th>             
            <th>Telefone</th>             
            <th>Email</th>             
            <th>Data Nascimento</th>             
            <th>Status</th>             
            <th>Ações</th>         
        </tr>     
    </thead>      

    <tbody>         
        <?php if (!empty($clientes)): ?>         
            <?php foreach ($clientes as $cliente): ?>         
                <tr>             
                    <td><?= $cliente['id_cliente'] ?></td>             
                    <td><?= $cliente['nome_cliente'] ?></td>             
                    <td><?= $cliente['telefone_cliente'] ?></td>             
                    <td><?= $cliente['email_cliente'] ?></td>             
                    <td><?= $cliente['data_nascimento_cliente'] ?></td>             
                    <td><?= $cliente['status_cliente'] ?></td>             
                    <td class="actions">
                        <button class="edit">Alterar</button>
                         <a href="<?= URL_BASE ?>index.php?url=cliente/deletarCliente&id=<?= $cliente['id_cliente'] ?>"
                        class="deletar"
                        onclick="return confirm('Deseja realmente excluir este cliente? Esta ação não pode ser desfeita!')">
                        Excluir
                        </a>
                    </td>    
                </tr>         
            <?php endforeach; ?>         
        <?php else: ?>             
            <tr>                 
                <td colspan="7">Nenhum cliente encontrado.</td>             
            </tr>         
        <?php endif; ?>
    </tbody> 
</table>
