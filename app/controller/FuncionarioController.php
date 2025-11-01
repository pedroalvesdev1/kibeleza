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

    public function inserirFuncionario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome_funcionario'];
            $telefone = $_POST['telefone_funcionario'];
            $email = $_POST['email_funcionario'];
            $cargo = $_POST['cargo_funcionario'];
            $status = $_POST['status_funcionario'];

            $modelFuncionario = new Funcionario();
            $modelFuncionario->inserirFuncionario($nome, $telefone, $email, $cargo, $status);

            header("Location: " . URL_BASE . "index.php?url=funcionario");
            exit;
        }
    }


    public function deletarFuncionario()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $funcionarioModel = new Funcionario();
            $funcionarioModel->deletarFuncionario($id);

            //Redireciona de volta para a lista
            header("Location: " . URL_BASE . "index.php?url=funcionario");
            exit;
        }
    }

    public function atualizarFuncionario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'id_funcionario' => $_POST['id_funcionario'],
                'nome_funcionario' => $_POST['nome_funcionario'],
                'telefone_funcionario' => $_POST['telefone_funcionario'],
                'email_funcionario' => $_POST['email_funcionario'],
                'cargo_funcionario' => $_POST['cargo_funcionario'],
                'status_funcionario' => $_POST['status_funcionario']
            ];

            $funcionarioModel = new Funcionario();

            if($funcionarioModel->atualizarFuncionario($dados)){
                $funcionarios = $funcionarioModel->listarFuncionarios();

                $dados = [
                    'funcionarios' => $funcionarios,
                    'msg' => 'Funcionário atualizado com sucesso!'
                ];
                header("Location: " . URL_BASE . "index.php?url=funcionario");
                exit;
            }else{
                echo "<script>alert('Erro ao atualizar funcionário.');</script>";
            }
        }
    }

}