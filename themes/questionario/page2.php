<?php $this->layout('modelos/layoutPergunta', [
   'title' => $title, 
   'blocoId' => $blocoId, 
   'page' => $page
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <p class="card-text">
      5. Nome do edital no qual a pesquisa foi contemplada*:
      <br>
      <label class="mt-2 ml-3"><input type="radio" required name="q5" value="Edital MCT/CNPq/MS-SCTIE-DECIT nº 025/2006 – Doenças Negligenciadas."> Edital MCT/CNPq/MS-SCTIE-DECIT nº 025/2006 – Doenças Negligenciadas.</label>
      <br>
      <label class="ml-3"><input type="radio" required name="q5" value="Edital MCT/CNPq/CTI-Saúde/MS/SCTIE/DECIT nº 034/2008 – Doenças Negligenciadas."> Edital MCT/CNPq/CTI-Saúde/MS/SCTIE/DECIT nº 034/2008 – Doenças Negligenciadas. </label>
      <br>
      <label class="ml-3"><input type="radio" required name="q5" value="Chamada MCTI/CNPq/MS-SCTIE-Decit nº 40/2012 – Pesquisa em Doenças Negligenciadas"> Chamada MCTI/CNPq/MS-SCTIE-Decit nº 40/2012 – Pesquisa em Doenças Negligenciadas</label>
   </p>
   '
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <p class="card-text">
      6. Título da pesquisa*: <input class="form-control-sm" type="text" name="q6" required>
   </p>
   '
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <p class="card-text">
      7. Data de início da pesquisa: <input class="form-control-sm" type="date" name="q7">
   </p>
   '
]);

$this->insert('modelos/base', [
   'conteudo' => '
   <p class="card-text">
      8. Data de término da pesquisa: <input class="form-control-sm" type="date" name="q8">
   </p>
   '
]);
