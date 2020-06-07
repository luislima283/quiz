<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Quiz HARDWARE</title>
</head>

<body class="bg-light">

<?php include "topo.php";?>
<!--container -->
    <div class="container bg-white">


<!-- row -->
   <div class="row ">

    <!-- col-sm-4-->
    <div class="col-sm-6 offset-3 text-center mt-3" >
        <h2 class ="text-center">Teste seus conhecimentos em Hardware!</h2>
        <form method="post" action="pergunta1.php">
           <div class="form-group">
               <label>Informe seu nome para começar o quiz</label>
               <input type="text" name="jogador" class="form-control" required>
           </div>
            <button type="submit" class="btn btn-primary form-control">
                começar
            </button>


        </form>
    </div>
    <!--/col-sm-4 -->

</div>
<!--/row-->


</body>

</html>