<?php

class ServicoController extends Controller
{
    public function index()
    {
        $dados = array();

        $modelServico = new Servico();
        $modelEspecialidade = new Especialidade();
        $dados['servicos'] = $modelServico->listarServico();
        $dados['especialidades'] = $modelEspecialidade->listarEspecialidade();
        $dados['titulo'] = "Serviços";
        $dados['conteudo'] = 'admin/servico/servico';

        $this->carregarViews('admin/dash', $dados);
    }

    public function inserirServico()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome_servico'];
            $descricao = $_POST['descricao_servico'];
            $duracao = $_POST['duracao_servico'];
            $preco = $_POST['preco_servico'];
            $id_especialidade = $_POST['id_especialidade'];
            $status = $_POST['status_servico'];
            $modelServico = new Servico();
            $modelServico->inserirServico($nome, $descricao, $duracao, $preco, $id_especialidade, $status);

            header("Location: " . URL_BASE . "index.php?url=servico");
            exit;
        }
    }
}
