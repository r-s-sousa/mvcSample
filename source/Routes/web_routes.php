<?php

/**
 * GET
 */
$router->group(null);
$router->get("/", "Web:home", "web.home");
$router->get("/sobre", "Web:about", "web.about");


/**
 * POST
 */
