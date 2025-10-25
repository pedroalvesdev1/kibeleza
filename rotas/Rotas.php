<?php

class Rotas
{
    //Método responsável por processar executar as rotasda aplicação
    public function executar()
    {
        //Define a URL inicial como "/"

        $url = '/';

        //SE existir o parametro "url" na reposição GET. adiciona ao valor inicial
        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        //inicializa o array de parametros que poderão ser passados para o método do controller
        $parametro = array();
        //verifica se a url não está vazia e não e apenas "/" como separador
        if (!empty($url) && $url != '/') {

            //quebra a string da url em partes, usando "/" como separador
            $url = explode('/', $url);

            //Remove o primeiro item do array (que será vazio por causa da "/" inicial)
            array_shift($url);

            //define o nome do controller com base no primeiro item da url
            //Ex: "produto" vira "ProdutoController"
            $controladorAtual = ucfirst($url[0]) . 'Controller';

            //Remove o primeiro item do array 
            array_shift($url);

            // Verifica se existe uma ação na url (ex: listar, editar, etc.)
            if (isset($url[0]) && !empty($url[0])) {
                $acaoAtual = $url[0]; //A ação será o segundo segmento da url
                array_shift($url); // Remove a ação da url
            } else {
                //Caso não seja passado, a ação padrão será "index"
                $acaoAtual = 'index';
            }

            //Se ainda existirem valores no array, eles serão considerados como parametros
            if (count($url) > 0) {
                $parametro = $url;
            }
        } else {  
            //caso não haja nehuma URL informado, define o padrão 
            $controladorAtual = 'HomeController';
            $acaoAtual = 'index';
        }

        if (!file_exists('../app/controller/' . $controladorAtual . '.php') || !method_exists($controladorAtual, $acaoAtual)) {
            //Caso não exista exibe mensagem de erro (útil para debug)
            echo "Estou aqui - não existe o " . $controladorAtual . ' em a ação atual: ' . $acaoAtual;

            //define o controlador de erro e a ação padrão
            $controladorAtual = 'ErrorController';
            $acaoAtual = 'index';
        }

        //Cria uma instancia do controller definido
        $controller = new $controladorAtual();
        //executa a ação do cotroller passaond os parametro da url
        call_user_func_array(array($controller, $acaoAtual), $parametro);
    }
}
?>