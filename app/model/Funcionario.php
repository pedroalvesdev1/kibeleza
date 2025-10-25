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
    public function inserirFuncionario($nome, $telefone, $email, $cargo, $status): void
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
}