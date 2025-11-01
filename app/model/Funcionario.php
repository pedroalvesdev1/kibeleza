<?php

class Funcionario extends Model
{
    public function listarFuncionarios()
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

    public function inserirFuncionario($nome, $telefone, $email, $cargo, $status)
    {
        $sql = "INSERT INTO tbl_funcionario (nome_funcionario, telefone_funcionario, email_funcionario, cargo_funcionario, status_funcionario) 
                VALUES (:nome, :telefone, :email, :cargo, :status)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':telefone', $telefone);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':cargo', $cargo);
        $stmt->bindValue(':status', $status);
        $stmt->execute();
    }

    public function deletarFuncionario($id){
        $sql = "DELETE FROM tbl_funcionario WHERE id_funcionario = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function contarFuncionario()
    {
        $sql = "SELECT COUNT(*) as total FROM tbl_funcionario";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['total'] ?? 0;
    }

    public function atualizarFuncionario($dados)
    {
        $sql = "UPDATE tbl_funcionario 
                SET nome_funcionario = :nome, 
                    telefone_funcionario = :telefone, 
                    email_funcionario = :email, 
                    cargo_funcionario = :cargo, 
                    status_funcionario = :status 
                WHERE id_funcionario = :id";
                
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $dados['nome_funcionario']);
        $stmt->bindValue(':telefone', $dados['telefone_funcionario']);
        $stmt->bindValue(':email', $dados['email_funcionario']);
        $stmt->bindValue(':cargo', $dados['cargo_funcionario']);
        $stmt->bindValue(':status', $dados['status_funcionario']);
        $stmt->bindValue(':id', $dados['id_funcionario']);
        return $stmt->execute();
    }
}