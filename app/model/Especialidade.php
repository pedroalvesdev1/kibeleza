<?php

class Especialidade extends Model
{
    public function listarEspecialidade(): array
    {
        // Query para selecionar todas as especialidades e ordenar por nome
        $sql = "SELECT * FROM tbl_especialidade ORDER BY nome_especialidade ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        // Retorna o array de resultados ou um array vazio
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function inserirEspecialidade(string $nome, string $descricao, string $status): void
    {
        // Query para inserir uma nova especialidade
        $sql = "INSERT INTO tbl_especialidade
                (nome_especialidade, descricao_especialidade, status_especialidade, created_date_especialidade)
                VALUES (:nome, :descricao, :status, NOW())";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':descricao', $descricao);
        $stmt->bindValue(':status', $status);
        $stmt->execute();
    }
}
