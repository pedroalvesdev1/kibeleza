<?php

class AgendamentoController extends Controller
{
     public function index()
    {
        $dados = array();

        $modelAgendamento = new Agendamento(); //instanciar a model Agendamento

        $modelCliente = new Cliente(); //ACRESCENTAR A BUSCA PELO MODEL CLIENTE
        $modelFuncionario = new Funcionario(); //ACRESCENTAR A BUSCA PELO MODEL FUNCIONARIO
        $modelServico = new Servico(); //ACRESCENTAR A BUSCA PELO MODEL SERVICO

        $dados['agendamentos'] = $modelAgendamento->listarAgendamento();
        $dados['clientes'] = $modelCliente->listarClientes(); //CHAMAR OS CLIENTES EXISTENTES NO BANCO
        $dados['funcionarios'] = $modelFuncionario->listarFuncionarios(); //CHAMAR OS FUNCIONARIOS EXISTENTES NO BANCO
        $dados['servicos'] = $modelServico->listarServico(); //CHAMAR OS SERVICOS EXISTENTES NO BANCO
        $dados['titulo'] = "Agendamentos";

        // Carrega o layout do dash, mas dizendo que o conteúdo interno será a view agendamento
        $dados['conteudo'] = 'admin/agendamento/agendamento';
        // var_dump($dados['agendamentos']);
        // exit;
        $this->carregarViews('admin/dash', $dados);
    }

    public function inserirAgendamento()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_cliente = $_POST['id_cliente'];
            $id_funcionario = $_POST['id_funcionario'];
            $id_servico = $_POST['id_servico'];
            $data = $_POST['data_agendamento'];
            $hora = $_POST['hora_agendamento'];            
            $status = $_POST['status_agendamento'];
            $observacao = $_POST['observacao_agendamento'];

            $modelAgendamento = new Agendamento();
            $modelAgendamento->inserirAgendamento($id_cliente, $id_funcionario, $id_servico, $data, $hora, $status, $observacao);

            header("Location: " . URL_BASE . "index.php?url=agendamento");
            exit;
        }
    }

   

    
}