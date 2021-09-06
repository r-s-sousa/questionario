<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Questões</title>
</head>

<body>

   <hr>
   <h3 style="text-align: center;">Questionário</h3>
   <hr>
   <?php foreach ($perguntas as $pergunta) : ?>
      <p style="text-align: justify;">
         <?= $pergunta; ?>
      </p>
      <hr>
   <?php endforeach; ?>

</body>

</html>