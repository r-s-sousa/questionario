# Detalhes do projeto

## Questionário

### Páginas
- Termos de privacidade (imagem e som / consentimento)
- Termo de consentimento
- Participação de entrevista
- Termo de uso de imagem
- Coleta de dados do pesquisador (nome, email, telefone)
- Introdução do questionário
- 13 Páginas dinâmicas de perguntas e respostas
- Agradecimentos

### Funcionalidades
- Validação dos campos de cadastro de pesquisador
- Condicionais iniciais
- Condicionais nas questões, criando assim árvores de decisões
- Validação se todas perguntas primárias / secondárias foram respondidas
- Campos para entrada de dados dinâmicos de diferentes tamanhos
- Salvamento de questões a cada página
- Atualização de questões por página
- Envio de notificação para responsável da pesquisa sempre que alguém terminar a pesquisa
- Envio de cópia do questionário no email do pesquisador em anexo como PDF

### Segurança
- Toda navegação entre as páginas são encriptadas com o protocolo SSL
- Todos campos para entrada de valores dinâmicos são tratados antes de salvos no banco de dados
- Todas as rotas (links) são cadastradas, para previnir de Web Scraper e mal navegação do usuário
- Somente os pesquisadores que preencherem o formulário inicial do cadastro, poderá acessar as questões



## Gestor de Questionário

### Páginas
- Login
- Listagem de pesquisadores
- Listagem de respostas dos pesquisadores

### Funcionalidades
- Controlar o acesso apenas aos administradores
- Listagem e Exclusão de pesquisadores / respostas
- Geração de relatório completo (todas respostas de todos pesquisadores)
- Geração de relatório individual (todas repostas de um pesquisador em específico)

## Infraestrura
- Todo projeto foi construído usando as melhores técnicas de desenvolvimento do mercado
- Projeto com nomenclatura MVC (model, view, controller) para fácilitação de crescimento, manutenção e reutilização
- Domínio / Subdomínio próprio online 24 Hrs por dia com SSL
- Banco de dados relacional online
- Interface personalizada e exclusiva desse projeto