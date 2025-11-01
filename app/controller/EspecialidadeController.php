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

    public function deletarEspecialidade()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $especialidadeModel = new Especialidade();
            $especialidadeModel->deletarEspecialidade($id);

            //Redireciona de volta para a lista
            header("Location: " . URL_BASE . "index.php?url=especialidade");
            exit;
        }
    }

    public function atualizarEspecialidade()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'id_especialidade' => $_POST['id_especialidade'],
                'nome_especialidade' => $_POST['nome_especialidade'],
                'descricao_especialidade' => $_POST['descricao_especialidade'],
                'status_especialidade' => $_POST['status_especialidade']
            ];

            $especialidadeModel = new Especialidade();

            if ($especialidadeModel->atualizar($dados)) {
                // Redireciona de volta para a lista
                header("Location: " . URL_BASE . "index.php?url=especialidade");
                exit;
            } else {
                // Tratar erro de atualização, se necessário
                echo "<script>alert('Erro ao atualizar especialidade!');</script>";
            }
        }
    }

}