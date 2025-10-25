<?php

class Cliente extends Model
{
    public function listarClientes(): array
    {
        $sql = "SELECT * FROM tbl_cliente";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        // Retorna todos os clientes, ou um array vazio se não houver resultados
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function inserirCliente($nome, $telefone, $email, $data_nasc, $status)
    {
        $sql = "INSERT INTO tbl_cliente
                (nome_cliente, telefone_cliente, email_cliente, data_nascimento_cliente, status_cliente, created_date_cliente)
                VALUES (:nome, :telefone, :email, :data_nasc, :status, NOW())";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':telefone', $telefone);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':data_nasc', $data_nasc);
        $stmt->bindValue(':status', $status);
        $stmt->execute();
    }

    public function deletarCliente($id)
    {
        $sql = "DELETE FROM tbl_cliente WHERE id_cliente = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function contarClientes()
    {
        $sql = "SELECT COUNT(*) as total FROM tbl_cliente";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['total'] ?? 0;
    }
}
