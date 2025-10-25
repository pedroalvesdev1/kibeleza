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
}