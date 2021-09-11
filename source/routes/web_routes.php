<?php

/**
 * GET
 */
$router->group(null);

// rota inicial é o termo de consentimento
$router->get("/", "Web:termoConsentimento", "web.termoConsentimento");

// termos de serviço para fins de consulta
$router->get("/termos", "Web:termosDeServico", "web.termos");

// carrega o formulário de agradecimentos, e despedida
$router->get("/finaliza-pesquisa", "Web:finalizarPesquisa", "web.finalizarPesquisa");

// carrega o formulário para verificar se o usuário quer participar da entrevista
$router->get("/partipar-da-entrevista", "Web:participaraDaEntrevista", "web.participaraDaEntrevista");

// carrega o formulário para verificar se o usuário ler o termo de imagem
$router->get("/termo-de-imagem-e-som", "Web:termoDeImagemSom", "web.termoDeImagemSom");

// vai para rota pra coleta de dados
$router->get("/informe-seus-dados/{aceitouTermo}", "Web:pegarDadosUsuario", "web.pegarDadosUsuario");

// baixa o termo
$router->get("/baixarTermo/{termo}", "Web:baixarTermo", "web.baixarTermo");

/**
 * POST
 */

// rota que recebe a escolha do usuário, se aceita os termos iniciais ou não
$router->post("/escolha", "Web:recebeEscolhaInicial", "web.recebeEscolhaInicial");

// rota que recebe a escolha referente a entrevista, se aceitar mostra os termos de audio e imagem
$router->post("/partipar-da-entrevista", "Web:recebeEscolhaEntrevista", "web.recebeEscolhaEntrevista");

// rota que recebe a escolha referente ao termo de imagem e som de voz
$router->post("/termo-de-imagem-e-som", "Web:recebeEscolhaImagemSom", "web.recebeEscolhaImagemSom");

// salva os dados do usuário antes de começar o questionário
$router->post("/informe-seus-dados", "Web:recebeDadosUsuario", "web.recebeDadosUsuario");
