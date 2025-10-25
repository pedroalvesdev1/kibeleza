<?php

class ClienteController extends Controller
{
    public function index() 
    {
        $dados = array();
        
       
        // Instancia o model Cliente
        $modelCliente = new Cliente();
        
        // Recupera a lista de clientes e adiciona ao array de dados
        $dados['clientes'] = $modelCliente->listarClientes();
        $dados['titulo'] = "Clientes";

        // Define o conteúdo interno da view principal
        $dados['conteudo'] = 'admin/cliente/cliente';

        // Carrega a view do dashboard com os dados
        $this->carregarViews('admin/dash', $dados);
    }

    
    public function inserirCliente()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome_cliente'];
            $telefone = $_POST['telefone_cliente'];
            $email = $_POST['email_cliente'];
            $data_nasc = $_POST['data_nasc_cliente'];
            $status = $_POST['status_cliente'];

            $modelCliente = new Cliente();
            $modelCliente->inserirCliente($nome, $telefone, $email, $data_nasc, $status);

            header("Location: " . URL_BASE . "index.php?url=cliente");
            exit;
        }
    }

    public function deletarCliente()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $clienteModel = new Cliente();
            $clienteModel->deletarCliente($id);

            //Redireciona de volta para a lista
            header("Location: " . URL_BASE . "index.php?url=cliente");
            exit;
        }
    }
}