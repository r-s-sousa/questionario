<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page,
   'subtitulo' => "As perguntas desse bloco são a respeito dos impactos da pesquisa na saúde da população.",
   'botaoFinaliza' => "true"
]);

$this->insert('modelos/primaria', [
   'id' => '36',
   'pergunta' => '36. A pesquisa gerou impactos na saúde, ou seja, houve alguma influência sobre indicadores de saúde (mortalidade, incidência, prevalência), determinantes sociais e ambientais, atenção e vigilância em saúde, etc*?',
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <div class="d-none" id="questao36_1">
   <p class="card-text">
   36.1 Se sim, assinale as opções nas quais a pesquisa gerou impactos (diretamente ou indiretamente)*:
   <br>

   <label class="mt-2 ml-3"><input type="checkbox" name="opcoes[]" 
      value="Mortalidade"> Mortalidade – a sua pesquisa identificou o impacto da mortalidade sobre uma condição e como essa pode se relacionar com intervenções, como por exemplo a implementação de novas práticas clínicas? <i>Exemplo: redução da mortalidade por dengue; potencial de anos de vida perdidos por morte prematura; melhoria dos registros de mortalidade por dengue.</i></label> <br>

   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
      value="Incidência"> Incidência – a sua pesquisa identificou o impacto de casos novos de uma condição em uma população? <i>Exemplo: redução do número de casos novos de dengue grave; qualificação da notificação de casos novos de dengue.</i></label> <br>

   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
   value="Prevalência"> Prevalência – a sua pesquisa identificou o impacto de uma condição em uma população? <i>Exemplo: redução do número de casos de dengue grave.</i></label> <br>

   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
      value="Fatores de risco modificáveis"> Fatores de risco modificáveis – a sua pesquisa identificou alterações sobre os fatores de risco específicos e modificáveis em uma população? <i>Exemplo: mudanças nas práticas de alimentação; aumento da prática de atividade física</i></label> <br>

   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
      value="Determinantes sociais/culturais"> Determinantes sociais/culturais – a sua pesquisa identificou o impacto sobre determinantes sociais/culturais de uma população? <i>Exemplo: mudanças nas práticas de armazenamento de materiais recicláveis.</i></label> <br>

   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
   value="Determinantes ambientas"> Determinantes ambientais – a sua pesquisa identificou o impacto sobre determinantes ambientais de uma localidade? <i>Exemplo: alteração nos níveis de infestação por Aedes Aegypti; redução dos níveis de poluentes tóxicos no ar.</i></label> <br>
   
   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
   value="Adequação"> Adequação -  a sua pesquisa identificou se a prática estava em conformidade com as evidências mais atualizadas? <i>Exemplo: adesão dos profissionais da Atenção Primária aos protocolos clínicos atualizados para manejo clínico da dengue.</i></label> <br>

   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
   value="Aceitabilidade"> Aceitabilidade – a sua pesquisa identificou o impacto de experiências da população/indivíduo em relação aos serviços de saúde ou a novas práticas? <i>Exemplo: satisfação dos usuários em relação ao trabalho dos Agentes de Combate a Endemias.</i></label> <br>
   
   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
   value="Efetividade"> Efetividade – a sua pesquisa identificou o impacto de condições que requerem a utilização de serviços de atenção especializada? Por <i>exemplo: alteração nas taxas de internação por dengue grave.</i></label> <br>

   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
   value="Segurança"> Segurança – a sua pesquisa identificou o impacto de efeitos adversos em relação a uma intervenção/medicamento? <i>Exemplo: avaliação de efeitos adversos de um novo medicamento para tratamento da dengue grave.</i></label> <br>

   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
   value="Outros" id="opcao1" onchange="opcoesOutrosEnableDisable()"> Outros <input required id="opcao1Input" type="text" class="form-control-sm" name="opcoesOutro"></label> <br>

   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
   value="Não sei/Não lembro"> Não sei/Não lembro</label> <br>
   
   <label class="ml-3"><input type="checkbox" name="opcoes[]" 
   value="Prefiro não responder"> Prefiro não responder</label> <br>
   
   </p
   </div>
   '
]);
