<form id="form-especialidades" class="data-form" method="POST" action="<?= URL_BASE ?>index.php?url=especialidade/inserirEspecialidade">

    <input type="hidden" name="id_especialidade">

    <input type="text" name="nome_especialidade" placeholder="Nome da Especialidade" required>
    <input type="text" name="descricao_especialidade" placeholder="Descrição" required>

    <select name="status_especialidade" required>
        <option value="ATIVO">ATIVO</option>
        <option value="INATIVO">INATIVO</option>
    </select>

    <button type="submit">Salvar</button>
    <button type="button" onclick="showTable('especialidades')">Cancelar</button>
</form>