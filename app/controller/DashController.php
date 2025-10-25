<?php
class DashController extends Controller
{
    public function index (){
        $dados = array();

        $dados['titulo'] = "DASHBOARD";
        $this->carregarViews('admin/dash', $dados);
    }
}
