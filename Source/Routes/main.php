<?php

// 
// MAIN PAGE
// 
$router->namespace("Source\App");
$router->get("/", "Web:home");
$router->get("/sobre", "Web:about");

// 
// ERRORS
// 
$router->group("error")->namespace("Source\App");
$router->get("/{errcode}", "Error:error");


