<?php
class ContatoEmail extends Model
{
    public function listarContatos()
    {
        $sql = "SELECT * FROM tbl_contato ORDER BY created_date_contato ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function contarContatos()
    {
        $sql = "SELECT COUNT(*) as total FROM tbl_contato";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result['total'] ?? 0;
    }

    public function deletarContato($id)
    {
        $sql = "DELETE FROM tbl_contato WHERE id_contato = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public function atualizarStatusContato($id, $novoStatus)
    {
        $sql = "UPDATE tbl_contato SET status_contato = :status WHERE id_contato = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':status', $novoStatus);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}