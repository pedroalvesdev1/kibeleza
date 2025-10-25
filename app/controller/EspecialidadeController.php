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
}