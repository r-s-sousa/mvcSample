<?php

namespace Source\App;

// ENGINE PLATES

use CoffeeCode\Router\Router;
use League\Plates\Engine;
use Source\Models\ContactDao;

/**
 * Controlador das rotas iniciais
 */
class Web
{
    /**
     * Objeto responsável por renderizar a view
     * @var Engine
     */
    private $view;

    public function __construct()
    {
        $this->view = new Engine(dirname(__DIR__, 2) . "/themes/main");
    }

    /**
     * Página incial
     *
     * @return void
     */
    public function home()
    {
        echo $this->view->render('home', [
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
        echo $this->view->render('about', [
            'title' => "Sobre | " . SITE
        ]);
    }
}




