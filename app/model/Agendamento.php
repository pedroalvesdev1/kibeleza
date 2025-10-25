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

    public function inserirAgendamento($id_cliente, $id_funcionario, $id_servico, $data, $hora, $status, $observacao)
    {
        $sql = "INSERT INTO tbl_agendamento
                (id_cliente, id_funcionario, id_servico, data_agendamento, hora_agendamento, status_agendamento, observacoes, created_date_agendamento)
                VALUES (:cliente, :funcionario, :servico, :data, :hora, :status, :observacao, NOW())";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':cliente', $id_cliente);
        $stmt->bindValue(':funcionario', $id_funcionario);
        $stmt->bindValue(':servico', $id_servico);
        $stmt->bindValue(':data', $data);
        $stmt->bindValue(':hora', $hora);
        $stmt->bindValue(':status', $status);
        $stmt->bindValue(':observacao', $observacao);
        $stmt->execute();
    }
    public function contarAgendamentos(): int
    {
        $sql = "SELECT COUNT(*) AS total FROM tbl_agendamento";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return (int)$row['total'];
    }
}