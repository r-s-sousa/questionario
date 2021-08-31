<?php

/**
 * GET
 */

// vai para rota com o questionário em si
$router->get("/questionario", "Questionario:inicio", "questionario.inicio");
$router->get("/questoes/page/{page}", "Questionario:bloco", "questionario.bloco");



/**
 * POST
 */
$router->post("/questionario/salvar", "Questionario:salvarAndProximaPergunta", "questionario.salvar");