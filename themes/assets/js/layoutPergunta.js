function mudou(id) {
   if (id == 8) {
      var qlForm = $('#questao8_1');
      var opSelecionada = $('input[name="q8"]:checked').attr("value");
   } 
   else if (id == 9) {
      var qlForm = $('#questao9_1');
      var opSelecionada = $('input[name="q9"]:checked').attr("value");
   } 
   else if (id == 10) {
      var qlForm = $('#questao10_1');
      var opSelecionada = $('input[name="q10"]:checked').attr("value");
   }
   else if (id == 12) {
      var qlForm = $('#questao12_1');
      var opSelecionada = $('input[name="q12"]:checked').attr("value");
   } 
   else if (id == 13) {
      var qlForm = $('#questao13_1');
      var opSelecionada = $('input[name="q13"]:checked').attr("value");
   } 
   else if (id == 14) {
      var qlForm = $('#questao14_1');
      var opSelecionada = $('input[name="q14"]:checked').attr("value");
   }
   else if (id == 16) {
      var qlForm = $('#questao16_1');
      var qlForm2 = $('#questao16_2');
      var opSelecionada = $('input[name="q16"]:checked').attr("value");
   }
   else if (id == 17) {
      var qlForm = $('#questao17_1');
      var opSelecionada = $('input[name="q17"]:checked').attr("value");
   } 
   else if (id == 18) {
      var qlForm = $('#questao18_1');
      var opSelecionada = $('input[name="q18"]:checked').attr("value");
   } 
   else if (id == 19) {
      var qlForm = $('#questao19_1');
      var qlForm2 = $('#questao19_2');
      var opSelecionada = $('input[name="q19"]:checked').attr("value");
   } 
   else if (id == 20) {
      var qlForm = $('#questao20_1');
      var qlForm2 = $('#questao20_2');
      var opSelecionada = $('input[name="q20"]:checked').attr("value");
   } 
   else if (id == 21) {
      var qlForm = $('#questao21_1');
      var qlForm2 = $('#questao21_2');
      var opSelecionada = $('input[name="q21"]:checked').attr("value");
   } 
   else if (id == 22) {
      var qlForm = $('#questao22_1');
      var qlForm2 = $('#questao22_2');
      var opSelecionada = $('input[name="q22"]:checked').attr("value");
   } 
   else if (id == 23) {
      var qlForm = $('#questao23_1');
      var qlForm2 = $('#questao23_2');
      var opSelecionada = $('input[name="q23"]:checked').attr("value");
   } 
   else if (id == 24) {
      var qlForm = $('#questao24_1');
      var opSelecionada = $('input[name="q24"]:checked').attr("value");
   } 
   else if (id == 25) {
      var qlForm = $('#questao25_1');
      var qlForm2 = $('#questao25_2');
      var opSelecionada = $('input[name="q25"]:checked').attr("value");
   } 
   else if (id == 26) {
      var qlForm = $('#questao26_1');
      var opSelecionada = $('input[name="q26"]:checked').attr("value");
   } 
   else if (id == 27) {
      var qlForm = $('#questao27_1');
      var opSelecionada = $('input[name="q27"]:checked').attr("value");
   } 
   else if (id == 28_1) 
   {
      var qlForm = $('#questao28_1_1');
      var opSelecionada = $('input[name="q28_1"]:checked').attr("value");
   } 
   else if (id == 28_2) {
      var qlForm = $('#questao28_2_1');
      var opSelecionada = $('input[name="q28_2"]:checked').attr("value");
   } 
   else if (id == 28_3) {
      var qlForm = $('#questao28_3_1');
      var opSelecionada = $('input[name="q28_3"]:checked').attr("value");
   } 
   else if (id == 28_4) {
      var qlForm = $('#questao28_4_1');
      var opSelecionada = $('input[name="q28_4"]:checked').attr("value");
   } 
   else if (id == 28_5) {
      var qlForm = $('#questao28_5_1');
      var opSelecionada = $('input[name="q28_5"]:checked').attr("value");
   } 
   else if (id == 28_6) {
      var qlForm = $('#questao28_6_1');
      var opSelecionada = $('input[name="q28_6"]:checked').attr("value");
   } 
   else if (id == 28_7) {
      var qlForm = $('#questao28_7_1');
      var opSelecionada = $('input[name="q28_7"]:checked').attr("value");
   } 
   else if (id == 28_8) {
      var qlForm = $('#questao28_8_1');
      var opSelecionada = $('input[name="q28_8"]:checked').attr("value");
   } 
   else if (id == 28_9) {
      var qlForm = $('#questao28_9_1');
      var opSelecionada = $('input[name="q28_9"]:checked').attr("value");
   } 
   else if (id == 29) {
      var qlForm = $('#questao29_1');
      var opSelecionada = $('input[name="q29"]:checked').attr("value");
   } 
   else if (id == 32) {
      var qlForm = $('#questao32_1');
      var opSelecionada = $('input[name="q32"]:checked').attr("value");
   } 
   else if (id == 33) {
      var qlForm = $('#questao33_1');
      var opSelecionada = $('input[name="q33"]:checked').attr("value");
   }  
   else if (id == 34) {
      var qlForm = $('#questao34_1');
      var opSelecionada = $('input[name="q34"]:checked').attr("value");
   } 
   else if (id == 35) {
      var qlForm = $('#questao35_1');
      var opSelecionada = $('input[name="q35"]:checked').attr("value");
   } 
   else if (id == 36) {
      var qlForm = $('#questao36_1');
      var opSelecionada = $('input[name="q36"]:checked').attr("value");
      if (opSelecionada == "Sim") {
         qlForm.removeClass('d-none');
         $("#opcao1Input").prop('disabled', true);
      } else{
         qlForm.addClass('d-none');
         $("#opcao1Input").prop('disabled', true);
      }
      return "";
   }

   if (opSelecionada == "Sim") {
      $(qlForm).find("*").prop('disabled', false);
      if(qlForm2!=null){
         $(qlForm2).find("*").prop('disabled', false);
         qlForm2.removeClass('d-none');   
      }
      qlForm.removeClass('d-none');
      
   } else {
      $(qlForm).find("*").prop('disabled', true);
      if(qlForm2!=null){
         $(qlForm2).find("*").prop('disabled', true);
         qlForm2.addClass('d-none');
      }
      qlForm.addClass('d-none');
   }
}

function mudouRadioSecondaria(idRadio) {
   var inputForRadio = document.getElementById(idRadio + "_Outro");
   var opSelecionada = $('input[name="' + idRadio + '"]:checked').attr("value");

   if (opSelecionada == "Outro") {
      inputForRadio.disabled = false;
   } else {
      inputForRadio.disabled = true;
   }
}

function opcoesOutrosEnableDisable() {
   var inputForRadio = document.getElementById('opcao1').checked;
   var campoParaSerAtivado = document.getElementById('opcao1Input');
   if (inputForRadio) {
      campoParaSerAtivado.disabled = false;
   } else {
      campoParaSerAtivado.disabled = true;
   }
}