<?php
class Servico extends Model
{
    public function listarServico()
    {
        $sql = "SELECT * FROM tbl_servico ORDER BY nome_servico ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function inserirServico($nome, $descricao, $duracao, $preco, $id_especialidade, $status)
    {

        $sql = "INSERT INTO tbl_servico(nome_servico, descricao_servico, duracao_servico, preco_servico, id_especialidade, status_servico, created_date_servico) VALUES (:nome, :descricao, :duracao, :preco, :id_especialidade, :status, NOW())";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':descricao', $descricao);
        $stmt->bindValue(':duracao', $duracao);
        $stmt->bindValue(':preco', $preco);
        $stmt->bindValue(':id_especialidade', $id_especialidade);
        $stmt->bindValue(':status', $status);
        $stmt->execute();
    }
}
