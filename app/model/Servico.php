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
    
    public function deletarServico($id){
        $sql = "DELETE FROM tbl_servico WHERE id_servico = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
    
    public function contarServico()
    {
        $sql = "SELECT COUNT(*) as total FROM tbl_servico";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['total'] ?? 0;
    }

    public function atualizar($dados)
    {
        $sql = "UPDATE tbl_servico SET 
                nome_servico = :nome,
                descricao_servico = :descricao,
                duracao_servico = :duracao,
                preco_servico = :preco,
                id_especialidade = :id_especialidade,
                status_servico = :status
            WHERE id_servico = :id_servico";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $dados['nome_servico']);
        $stmt->bindValue(':descricao', $dados['descricao_servico']);
        $stmt->bindValue(':duracao', $dados['duracao_servico']);
        $stmt->bindValue(':preco', $dados['preco_servico']);
        $stmt->bindValue(':id_especialidade', $dados['id_especialidade']);
        $stmt->bindValue(':status', $dados['status_servico']);
        $stmt->bindValue(':id_servico', $dados['id_servico']);
        
        return $stmt->execute();
    }
}
