<?php
//estrutura

define('URL_BASE', 'https://4semestre.ubsistema.com.br/aluno/pedro/kibeleza/public/');

//define config BD

define('DB_HOST', 'br61-cp.valueserver.com.br');
define('DB_NAME', 'alve6465_ub_kibeleza');
define('DB_USER', 'alve6465_aluno');
define('DB_PASS', 'AlunoUb@123');

spl_autoload_register(
    function($class)
    {
        
        if(file_exists('../app/controller/' .$class. '.php')){
            require_once'../app/controller/' .$class. '.php';
        }
        if(file_exists(('../app/model/'.$class. '.php'))){
            require_once'../app/model/' .$class. '.php';
        }
        if(file_exists(('../rotas/'.$class. '.php'))){
            require_once'../rotas/' .$class. '.php';
        }
    }
);