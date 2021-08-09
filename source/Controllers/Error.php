<?php

namespace Source\Controllers;

// Engine blade
use League\Plates\Engine;

/**
 * Classe responsável por gerir erros de rotas
 */
class Error extends Controller
{
    public function __construct($router) 
    {
        parent::__construct($router);
    }

    /**
     * Página incial
     *
     * @return void
     */
    public function Error($data)
    {
        echo $this->view->render("main/error", [
            'title' => "Error {$data['errcode']} | ".SITE,
            'error' => $data['errcode']
        ]);
    }
}