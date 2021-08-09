<?php

/**
 * Nome do Site
 */
define("SITE", "mvcSample");

/**
 * Url inicial do Site
 */
define("URL", "http://localhost/mvcSample");

/**
 * Inicia a configuração para podermos usar banco de dados
 */
ActiveRecord\Config::initialize(function ($cfg) {
  $cfg->set_connections(
    array(
      'development' => 'mysql://rafael:Rafinha@123@localhost/template'
    )
  );
});

/**
 * Define o formato de salvamento de datetime no banco de dados
 */
ActiveRecord\Connection::$datetime_format = 'Y-m-d H:i:s';

/**
 * Define o fuso-horário brasileiro
 */
date_default_timezone_set('America/Sao_Paulo');
