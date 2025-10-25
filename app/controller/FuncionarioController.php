<?php

class FuncionarioController extends Controller
{
    public function index()
    {
        $dados = array();

        // Instanciando o modelo Funcionario
        $modelFuncionario = new Funcionario();

        // Listando os funcionários
        $dados['funcionarios'] = $modelFuncionario->listarFuncionarios();
        $dados['titulo'] = 'Funcionarios';

        // Definindo a view do conteúdo
        $dados['conteudo'] = 'admin/funcionario/funcionario';

        // Carregando as views
        $this->carregarViews('admin/dash', $dados);
    }
}