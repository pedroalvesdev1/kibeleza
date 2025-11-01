<?php

class Especialidade extends Model
{
    public function listarEspecialidade(){
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
    
    public function inserirEspecialidade($nome, $descricao, $status)
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
    
    public function deletarEspecialidade($id){
        $sql = "DELETE FROM tbl_especialidade WHERE id_especialidade = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }
    
    public function contarEspecialidade()
    {
        $sql = "SELECT COUNT(*) as total FROM tbl_especialidade";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return (int)$row['total'];
    }
    
    public function atualizar($dados)
    {
        $sql = "UPDATE tbl_especialidade SET
            nome_especialidade = :nome,
            descricao_especialidade = :descricao,
            status_especialidade = :status
            WHERE id_especialidade = :id";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $dados['nome_especialidade']);
        $stmt->bindValue(':descricao', $dados['descricao_especialidade']);
        $stmt->bindValue(':status', $dados['status_especialidade']);
        $stmt->bindValue(':id', $dados['id_especialidade']);
        
        return $stmt->execute();
    }
}
