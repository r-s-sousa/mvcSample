<?php

namespace Source\Controllers;

// ENGINE PLATES

use CoffeeCode\Router\Router;
use League\Plates\Engine;

/**
 * Controlador das rotas iniciais
 */
class Web extends Controller
{
    /**
     * Construtor do controlador Web
     *
     * @param Router $router
     */
    public function __construct($router)
    {
        parent::__construct($router);
    }

    /**
     * Página incial
     *
     * @return void
     */
    public function home()
    {
        echo $this->view->render('main/home', [
            'title' => "HOME | " . SITE,
        ]);
    }

    /**
     * Página de sobre
     *
     * @return void
     */
    public function about()
    {
        echo $this->view->render('main/about', [
            'title' => "Sobre | " . SITE
        ]);
    }
}




