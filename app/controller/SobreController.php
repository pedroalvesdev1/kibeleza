<?php

class SobreController extends Controller
{
    public function index()
    {
        $dados['titulo'] = "SOBRE";

        $dados = array();
        $this->carregarViews('sobre', $dados);
    }
}