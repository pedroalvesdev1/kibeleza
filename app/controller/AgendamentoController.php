<?php

class AgendamentoController extends Controller
{
    public function index() 
    {
        $dados = array();

        $modelAgendamento = new Agendamento();
        $dados['agendamentos'] = $modelAgendamento->listarAgendamento();
        $dados['titulo'] = "Agendamento";
        $dados['conteudo'] = 'admin/agendamento/agendamento';
        
        $this->carregarViews('admin/dash', $dados);
    }
}