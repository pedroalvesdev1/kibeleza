<form id="form-funcionarios" class="data-form" method="POST" action="<?= URL_BASE ?>index.php?url=funcionario/inserirFuncionario">
    <input type="hidden" name="id_funcionario">    

    <input type="text" name="nome_funcionario" placeholder="Nome" required>
    <input type="text" name="telefone_funcionario" placeholder="Telefone" required>
    <input type="email" name="email_funcionario" placeholder="E-mail" required>
    <input type="text" name="cargo_funcionario" placeholder="Cargo" required>

    <select name="status_funcionario" required>
        <option value="ATIVO">ATIVO</option>
        <option value="INATIVO">INATIVO</option>
    </select>

    <button type="submit">Salvar</button>
    <button type="button" onclick="showTable('funcionarios')">Cancelar</button>
</form>