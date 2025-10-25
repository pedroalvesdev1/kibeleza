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
}