<?php

class HomeController extends Controller {
    public function index()
    {
        $dados = array();
        $this->carregarViews('home', $dados);
    }
}
