<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Quiz HARDWARE pergunta-1</title>
</head>

<body class="bg-light"> 

<?php include "topo.php";?>
<!--container -->
<div class="container bg-dark">
    <div class="container bg-white">


<!-- row -->
   <div class="row ">

    <!-- col-sm-4-->
    <div class="col-sm-6 offset-3 text-center mt-3" >
        <h2 class ="text-center">1. Considerando os mouses que utilizam cabos,uma interface de conexão válida é a? </h2>
        <?php

        //recebe o campo com o nome do jogador

        $jogador =$_POST['jogador'];
        ?>


        <form method="post" action="pergunta2.php">
           <div class="form-group">

               <ul class="list-group text-left">
                   <li class="list-group-item">
                       <label>
                           <input type="radio" name="alternativa" value="A">
                           VGA
                       </label>
                   </li>

                   <li class="list-group-item">
                       <label>
                           <input type="radio" name="alternativa" value="b">
                         PCI
                       </label>
                   </li>

                   <li class="list-group-item">
                       <label>
                           <input type="radio" name="alternativa" value="c">
                          PS2
                       </label>
                   </li>
               </ul>

           </div>
            <button type="submit" class="btn btn-primary form-control">
                Responder
            </button>
            <input type="hidden" name="jogador" value="<?php echo $jogador; ?>">


        </form>
    </div>
    <!--/col-sm-4 -->

</div>
<!--/row-->
</div>
</div>

</body>

</html>