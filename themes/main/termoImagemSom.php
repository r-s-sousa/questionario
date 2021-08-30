<?php $this->layout('_theme', ['title' => $title]); ?>

<!-- HEADER -->
<?php
$this->start('navbar');
$this->insert('main/partials/navbar');
$this->end();
?>
<!-- END_HEADER -->

<div id="termo2" class="container bg-white p-2 rounded" style="margin-top: 70px;">
   <div class="row mt-3 mb-3">
      <div class="col-md-12 text-center">
         <h2 class="mb-4">TERMO DE AUTORIZAÇÃO PARA UTILIZAÇÃO DE IMAGEM E SOM DE VOZ PARA FINS DE PESQUISA</h2>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Autorizo a utilização da minha imagem e som de voz, na qualidade de entrevistado(a) na pesquisa intitulada “Avaliação de impacto das pesquisas sobre Doenças Tropicais Negligenciadas no Brasil”, sob responsabilidade de Gabriela Bardelini Tavares Melo, aluna de doutorado do Programa de Pós-Graduação em Ciências e Tecnologias em Saúde (PPGCTS) da Universidade de Brasília – Faculdade de Ceilândia, sob orientação de Marcos Takashi Obara e coorientação de Antonia de Jesus Angulo Tuesta, ambos professores da Universidade de Brasília.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Minha imagem e som de voz podem ser utilizadas apenas para análise por parte da equipe da pesquisa.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Tenho ciência de que não haverá divulgação da minha imagem nem som de voz por qualquer meio de comunicação, sejam elas televisão, rádio ou internet, exceto nas atividades vinculadas ao ensino e a pesquisa explicitadas anteriormente. Tenho ciência também de que a guarda e demais procedimentos de segurança com relação às imagens e sons de voz são de responsabilidade da pesquisadora responsável, e ficarão arquivadas por um período de cinco anos. Após isso, serão destruídas.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Este documento (Termo de Consentimento Livre e Esclarecido - TCLE) foi elaborado em duas VIAS. Uma foi assinada pela pesquisadora responsável e enviada juntamente com o e-mail de convite para participar da entrevista. A outra via é sua e é importante que o (a) sr. (a) guarde uma cópia em seus arquivos.
         </p>
         <p class="ml-2 mr-2 ml-md-4 mr-md-4 text-justify">
            <span style="margin-left: 25px;"></span> Ao clicar na opção abaixo “Declaro que autorizo, livre e espontaneamente, o uso para fins de pesquisa, nos termos acima descritos, da minha imagem e som de voz”, o (a) Sr. (a) concorda em participar da entrevista virtual e ter sua imagem e voz gravadas para a pesquisa. Caso não concorde em participar, clique na opção “Não autorizo a utilização da minha imagem e som de voz para fins da pesquisa”.
         </p>
      </div>
   </div>
</div>

<div class="container">
   <div class="row">
      <div class="col-md-12 mt-3">
         <form action="<?= $router->route('web.recebeEscolhaImagemSom'); ?>" method="post">
            <label for="op1"><input type="radio" name="opcaoTermo" id="op1" value="true"> Declaro que autorizo, livre e espontaneamente, o uso para fins de pesquisa, nos termos acima descritos, da minha imagem e som de voz.</label>
            <br>
            <label for="op2"><input type="radio" name="opcaoTermo" id="op2" value="false" checked> Não autorizo a utilização da minha imagem e som de voz para fins da pesquisa.</label>
            <br>
            <div class="text-center m-4">
               <button type="submit" class="btn btn-info">Prosseguir</button>
            </div>
         </form>
      </div>
   </div>
</div>

<!-- FOOTER -->
<?php
// $this->start('footer');
// $this->insert('main/partials/footer');
// $this->end();
?>
<!-- END_FOOTER -->

<?php $this->start('scripts'); ?>

<script>
   $(document).ready(function() {
      document.getElementById('home').classList.add('active');
      // $('#footerTermos').addClass('fixed-bottom');
   });
</script>

<?php $this->stop(); ?>