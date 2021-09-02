<!-- <div class="col-md-12 mt-4 d-none" id="questao<?= $id; ?>"> -->
<div class="col-md-12 mt-4" id="questao<?= $id; ?>">
   <div class="card">
      <div class="card-body">
         <p class="card-text">
            <?= $pergunta; ?>
            <br>
            <label class="mt-2 ml-3"><input type="radio" name="q<?= $id; ?>" value="Não sei/Não lembro"> Não sei/Não lembro</label>
            <br>
            <label class="ml-3"><input type="radio" name="q<?= $id; ?>" value="Prefiro não responder"> Prefiro não responder</label>
            <br>
            <label class="ml-3"> <?= $classe ?>: <input type="text" class="form-control-sm" name="q<?= $id; ?>Outro"></label>
         </p>
      </div>
   </div>
</div>

<!-- 
   id
   pergunta
   classe
-->