<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title,
   'blocoId' => $blocoId,
   'page' => $page
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <p class="card-text">
   1. Principal Grande Área de Atuação*:
   <br>
   <label class="mt-2 ml-3"><input type="radio" onchange="mudouRadioSecondaria(\'q1\')" name="q1" class="radio" value="Ciências Exatas e da Terra"> Ciências Exatas e da Terra</label>
   <br>
   <label class="ml-3"><input type="radio" onchange="mudouRadioSecondaria(\'q1\')" name="q1" class="radio" value="Engenharias"> Engenharias</label>
   <br>
   <label class="ml-3"><input type="radio" onchange="mudouRadioSecondaria(\'q1\')" name="q1" class="radio" value="Ciências Agrárias"> Ciências Agrárias</label>
   <br>
   <label class="ml-3"><input type="radio" onchange="mudouRadioSecondaria(\'q1\')" name="q1" class="radio" value="Ciências Humanas"> Ciências Humanas</label>
   <br>
   <label class="ml-3"><input type="radio" onchange="mudouRadioSecondaria(\'q1\')" name="q1" class="radio" value="Ciência Biológicas"> Ciência Biológicas</label>
   <br>
   <label class="ml-3"><input type="radio" onchange="mudouRadioSecondaria(\'q1\')" name="q1" class="radio" value="Ciências da Saúde"> Ciências da Saúde</label>
   <br>
   <label class="ml-3"><input type="radio" onchange="mudouRadioSecondaria(\'q1\')" name="q1" class="radio" value="Ciências Sociais Aplicadas"> Ciências Sociais Aplicadas</label>
   <br>
   <label class="ml-3"><input type="radio" onchange="mudouRadioSecondaria(\'q1\')" name="q1" class="radio" value="Linguística, Letras e Artes"> Linguística, Letras e Artes</label>
   <br>
   <label class="ml-3"><input type="radio" onchange="mudouRadioSecondaria(\'q1\')" name="q1" class="radio" value="Outro"> Outro
      <input type="text" class="form-control-sm" name="q1_Outro" id="q1_Outro" required disabled></label>
</p>
   '
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <p class="card-text">
      2. Principal Área de Atuação: <input class="form-control-sm" type="text" name="q2" value="'.$respostas['q2']['resposta'].'" required>
   </p>
   '
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <p class="card-text">
      3. Principal Subárea de Atuação: <input class="form-control-sm" type="text" name="q3" value="'.$respostas['q3']['resposta'].'" required>
   </p>
   '
]);
