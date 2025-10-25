<?php

class Funcionario extends Model
{
    public function listarFuncionarios(): array
    {
        $sql = "SELECT * FROM tbl_funcionario";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        // Retorna todos os clientes, ou um array vazio se não houver resultados
         if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }
}