<?php

class Agendamento extends Model
{
    public function listarAgendamento(): array
    {
        // Query para selecionar todos os agendamentos ordenados por data e hora decrescente
        $sql = "SELECT * FROM tbl_agendamento INNER JOIN tbl_cliente ON tbl_agendamento.id_cliente = tbl_cliente.id_cliente INNER JOIN tbl_funcionario ON tbl_agendamento.id_funcionario = tbl_funcionario.id_funcionario INNER JOIN tbl_servico ON tbl_agendamento.id_servico = tbl_servico.id_servico INNER JOIN tbl_especialidade ON tbl_servico.id_especialidade = tbl_especialidade.id_especialidade ORDER BY id_agendamento ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }
}