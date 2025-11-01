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
    
    public function deletarServico()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $servicoModel = new Servico();
            $servicoModel->deletarServico($id);
            
            header("Location: " . URL_BASE . "index.php?url=servico");
        }
    }
    
    public function atualizarServico()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'id_servico' => $_POST['id_servico'],
                'nome_servico' => $_POST['nome_servico'],
                'descricao_servico' => $_POST['descricao_servico'],
                'duracao_servico' => $_POST['duracao_servico'],
                'preco_servico' => $_POST['preco_servico'],
                'id_especialidade' => $_POST['id_especialidade'],
                'status_servico' => $_POST['status_servico']
            ];
            
            $servicoModel = new Servico();
            $especialidadeModel = new Especialidade();
            
            $resultado = $servicoModel->atualizar($dados);
            
            if($resultado){
                $dados = [
                    'servicos' => $servicoModel->listarServico(),
                    'especialidades' => $especialidadeModel->listarEspecialidade(),
                    'msg' => 'Serviço atualizado com sucesso!'
                ];
                header("Location: " . URL_BASE . "index.php?url=servico");
                exit;
            }else{
                echo "<script>alert('Erro ao atualizar serviço.');</script>";
            }
        }
    }
    
}
