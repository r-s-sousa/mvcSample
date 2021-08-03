<?php

/**
 * Nome do Site
 */
define("SITE", "crudatt");

/**
 * Url inicial do Site
 */
define("URL", "http://localhost/crudatt");

/**
 * Inicia a configuração para podermos usar banco de dados
 */
ActiveRecord\Config::initialize(function ($cfg) {
  $cfg->set_connections(
    array(
      'development' => 'mysql://rafael:Rafinha@123@localhost/crudatt'
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

/**
 * Apresenta todos argumentos passados de uma 
 * forma bem atrativa
 *
 * @param boolean $exit Finaliza o site após apresentar os dados
 * @return void
 */
function dd()
{
  $args = func_get_args();

  foreach($args as $arg)
  {
    echo "<pre>";
    var_dump($arg);
    echo "</pre>";

    echo "<br>";
  }
}

/**
 * Retorna a url completa do projeto, concatenada do que o usuário
 * passar no parâmetro url
 *
 * @param string $url Url a ser concatenada a url base do site
 * @return string url completa
 */
function url($url = "")
{
  if ($url == "") {
    return URL . "/";
  }

  return URL . "/$url";
}
