<div class="col-md-12 mt-4">
   <div class="card">
      <div class="card-body">
         <p class="card-text">
            <?= $pergunta; ?>
            <br>
            <label class="mt-2 ml-3"><input onchange="mudou(<?= $id; ?>)" type="radio" name="q<?= $id; ?>" value="Sim"> Sim</label>
            <br>
            <label class="ml-3"><input onchange="mudou(<?= $id; ?>)" type="radio" name="q<?= $id; ?>" value="Não"> Não</label>
            <br>
            <label class="ml-3"><input onchange="mudou(<?= $id; ?>)" type="radio" name="q<?= $id; ?>" value="Não sei/Não lembro"> Não sei/Não lembro</label>
            <br>
            <label class="ml-3"><input onchange="mudou(<?= $id; ?>)" type="radio" name="q<?= $id; ?>" value="Prefiro não responder"> Prefiro não responder</label>
         </p>
      </div>
   </div>
</div>

<!-- 
   id
   pergunta
-->