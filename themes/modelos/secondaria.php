<!-- <div class="col-md-12 mt-4 d-none" id="questao<?= $id; ?>"> -->
<div class="col-md-12 mt-4" id="questao<?= $id; ?>">
   <div class="card">
      <div class="card-body">
         <p class="card-text mr-3">
            <?= $pergunta; ?>
            <br>
            <?php 
               if(!isset($grande)):
            ?>
            <label class="ml-3"><input onchange="mudouRadioSecondaria('q<?= $id; ?>')" type="radio"  required name="q<?= $id; ?>"  value="Outro"> <?= $classe ?>: </label>
            <textarea class="form-control ml-3" name="q<?= $id; ?>_Outro" id="q<?= $id; ?>_Outro" rows="5" required disabled></textarea>
            <?php 
               else:
            ?>
            <label class="ml-3"><input onchange="mudouRadioSecondaria('q<?= $id; ?>')" type="radio"  required name="q<?= $id; ?>"  value="Outro"> <?= $classe ?>: 
            <input type="text" class="form-control-sm" name="q<?= $id; ?>_Outro" id="q<?= $id; ?>_Outro" required disabled></label>
            <?php 
               endif;
            ?>
            <br>
            <label class="mt-2 ml-3"><input onchange="mudouRadioSecondaria('q<?= $id; ?>')" type="radio"  required name="q<?= $id; ?>" value="Não sei/Não lembro"> Não sei/Não lembro</label>
            <br>
            <label class="ml-3"><input onchange="mudouRadioSecondaria('q<?= $id; ?>')" type="radio"  required name="q<?= $id; ?>" value="Prefiro não responder"> Prefiro não responder</label>
         </p>
      </div>
   </div>
</div>


<!-- 
   id
   pergunta
   classe
-->