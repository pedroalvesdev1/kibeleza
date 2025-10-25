<?php

class EspecialidadeController extends Controller
{
    public function index() 
    {
        $dados = array();

        $modelEspecialidade = new Especialidade();
        $dados['especialidades'] = $modelEspecialidade->listarEspecialidade();
        $dados['titulo'] = "Especialidades";
        $dados['conteudo'] = 'admin/especialidade/especialidade';
        
        $this->carregarViews('admin/dash', $dados);
    }

    public function inserirEspecialidade()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome_especialidade'];
            $descricao = $_POST['descricao_especialidade'];
            $status = $_POST['status_especialidade'];

            $modelEspecialidade = new Especialidade();
            $modelEspecialidade->inserirEspecialidade($nome, $descricao, $status);

            header("Location: " . URL_BASE . "index.php?url=especialidade");
            exit;
        }
    }

}