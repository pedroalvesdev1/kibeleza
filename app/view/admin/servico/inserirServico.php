<form id="form-servico" class="data-form" method="POST" action="<?= URL_BASE ?>index.php?url=servico/inserirServico">
    <input type="hidden" name="id_servico">

    <input type="text" name="nome_servico" placeholder="Serviço" required>
    <textarea name="descricao_servico" placeholder="Descrição" required></textarea>
    <div>
        <input type="number" name="duracao_servico" placeholder="Duração (minutos)" required>
        <input type="text" name="preco_servico" placeholder="Preço" required>
    </div>
    <div>
        <select name="id_especialidade" required>
            <option value="">Selecione a Especialidade</option>
            <?php if (!empty($especialidades)): ?>
                <?php foreach ($especialidades as $esp): ?>
                    <option value="<?= $esp['id_especialidade'] ?>"><?= $esp['nome_especialidade'] ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>

        <select name="status_servico" required>
            <option value="ATIVO">ATIVO</option>
            <option value="INATIVO">INATIVO</option>
        </select>
    </div>

    <button type="submit">Salvar</button>
    <button type="button" onclick="showTable('servico')">Cancelar</button>

</form>