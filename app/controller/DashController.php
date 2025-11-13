<?php
class DashController extends Controller
{
    public function index()
    {
        // Carrega os models
        $clienteModel = new Cliente();
        $servicoModel = new Servico();
        $funcionarioModel = new Funcionario();
        $especialidadeModel = new Especialidade();
        $agendamentoModel = new Agendamento();

        // Pega os totais
        $totalClientes = $clienteModel->contarClientes();
        $totalServico = $servicoModel->contarServico();
        $totalFuncionario = $funcionarioModel->contarFuncionario();
        $totalEspecialidade = $especialidadeModel->contarEspecialidade();
        $totalAgendamentos = $agendamentoModel->contarAgendamentos();

        $dados = array();

        $dados['titulo'] = "DASHBOARD";
        $dados['nomeUsuario'] = $_SESSION['funcionario']['nome_funcionario'];
        $dados['totalClientes'] = $totalClientes;
        $dados['totalServico'] = $totalServico;
        $dados['totalFuncionario'] = $totalFuncionario;
        $dados['totalEspecialidade'] = $totalEspecialidade;
        $dados['totalAgendamentos'] = $totalAgendamentos;

        $this->carregarViews('admin/dash', $dados);
    }
}
