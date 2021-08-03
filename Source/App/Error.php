<?php

namespace Source\App;

// Engine blade
use League\Plates\Engine;

/**
 * Classe responsável por gerir erros de rotas
 */
class Error
{
    /**
     * Objeto responsável por renderizar a view
     * @var Engine
     */
    private $view;

    /**
     * Método construtor da visão
     */
    public function __construct() 
    {
        $this->view = new Engine(dirname(__DIR__,2)."/themes/main");
    }

    /**
     * Página incial
     *
     * @return void
     */
    public function Error($data)
    {
        echo $this->view->render("error", [
            'title' => "Error {$data['errcode']} | ".SITE,
            'error' => $data['errcode']
        ]);
    }
}