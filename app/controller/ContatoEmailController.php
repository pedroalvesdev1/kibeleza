<?php
class ContatoEmailController extends Controller
{
    public function index()
    {
        $dados = array();
        $modelContatoEmail = new ContatoEmail();
        $dados['contatos'] = $modelContatoEmail->listarContatos();
        $dados['titulo'] = "Contatos";

        $dados['conteudo'] = 'admin/contato/contato';
        $this->carregarViews('admin/dash', $dados);
    }

    public function deletarContato()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $contatoEmailModel = new ContatoEmail();
            $contatoEmailModel->deletarContato($id);
            header("Location: " . URL_BASE . "index.php?url=contatoEmail");
            exit;
        }
    }

    public function atualizarStatusContato()
    {
        if (!isset($_GET['id'])) {
            header("Location: " . URL_BASE . "index.php?url=contatoEmail");
            exit;
        }
        $id = $_GET['id'];
        $contatoEmailModel = new ContatoEmail();
        $contatoEmailModel->atualizarStatusContato($id, 'LIDO');
        header("Location: " . URL_BASE . "index.php?url=contatoEmail");
        exit;
    }
}