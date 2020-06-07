<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Quiz PHP pergunta-1</title>
</head>

<body class="bg-light">

<?php include "topo.php";?>
<!--container -->
<div class="container bg-dark">
    <div class="container bg-white">


<!-- row -->
   <div class="row ">

    <!-- col-sm-4-->
    
      <?php

        //recebe o campo com o nome do jogador

        $jogador =$_POST['jogador'];

        //receber a alternativa

        $alternativa = $_POST['alternativa'];

        // recebe os pontos ja somados, enviados pela pergunta anterior
        $pontos = $_POST['pontos'];

        // verificar se a alternativa esta correta
        if ($alternativa=="a"){
          // somar os pontos
          $pontos = $pontos + 5;
          echo "<div class='alert alert-success col-sm-12'>
          Parabens $jogador a resposta está certa!
          </div>";

        }else{
          echo "<div class='alert alert-danger col-sm-12'>
          Resposta errada, $jogador você não somou pontos!
          </div>";

        }
        // exibir os pontos do jogador
        echo "<h4>
        <span class='bg-dark text-white'>$pontos </span> Pontos </h4>
        <sp"

        ?>
        <div class="col-sm-6 offset-3 text-center mt-3" >

         <h2 class ="text-center">3. Das alternativas, qual é periférico de saida?</h2>
        <form method="post" action="pergunta4.php">
           <div class="form-group">

               <ul class="list-group text-left">
                   <li class="list-group-item">
                       <label>
                           <input type="radio" name="alternativa" value="a">
                           Impressora
                       </label>
                   </li>

                   <li class="list-group-item">
                       <label>
                           <input type="radio" name="alternativa" value="b">
                           Teclado
                       </label>
                   </li>

                   <li class="list-group-item">
                       <label>
                           <input type="radio" name="alternativa" value="c">
                           Mouse
                       </label>
                   </li>
               </ul>

           </div>
            <button type="submit" class="btn btn-primary form-control">
                Responder
            </button>
            <input type="hidden" name="jogador" value="<?php echo $jogador; ?>">

            <input type="hidden" name="pontos" value="<?php echo $pontos; ?>">


        </form>
    </div>
    <!--/col-sm-4 -->

</div>
<!--/row-->
</div>
</div>

</body>

</html>