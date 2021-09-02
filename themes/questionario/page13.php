<?php $this->layout('modelos/layoutPergunta', ['title' => $title, 'blocoId' => $blocoId, 'page' => $page]);

$this->insert('modelos/primaria', [
   'id' => '38',
   'pergunta' => '38. A pesquisa gerou impactos na saúde, ou seja, houve alguma influência sobre indicadores de saúde (mortalidade, incidência, prevalência), determinantes sociais e ambientais, atenção e vigilância em saúde, etc*?',
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <p class="card-text">
   38.1 Se sim, assinale as opções nas quais a pesquisa gerou impacto*:
   <br>
   <label class="mt-2 ml-3"><input type="checkbox" name="opcoes[]" value="Mortalidade"> Mortalidade</label> <br>
   <label class="ml-3"><input type="checkbox" name="opcoes[]" value="Incidência"> Incidência</label> <br>
   <label class="ml-3"><input type="checkbox" name="opcoes[]" value="Fatores de risco"> Fatores de risco</label> <br>
   <label class="ml-3"><input type="checkbox" name="opcoes[]" value="Determinantes sociais/culturas"> Determinantes sociais/culturas</label>
   </p
   '
]);
