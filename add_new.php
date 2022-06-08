<?php
//Inclusão da conexão com o banco de dados para que seja usado o comando INSERT 
//com intuito de inserir os dados enviados atraves do metodo post para a tabela estoque
//do banco de dados conetrole-estoque cujo está situado nos comandos de conexão.
include "db_conn.php";

if(isset($_POST['submit'])) {
    $item = $_POST['item'];

    $sql = "INSERT INTO `estoque`(`id`, `item_name`) VALUES (NULL,'$item')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Novo item adicionado com sucesso");
    }
    else{
        echo "Failed: ". mysqli_error($conn);
    }
}

?>
<!--Tela de inserção dos dados desenvolvida e estilizada usando bootstrap jsdelivr-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Controle de estoque</title>
</head>
  <body>
    
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: cyan;">
        Controle de estoque
    </nav>

    <div class="container">
        <div class="text-center mb4">
            <h3>Adicionar Novo Item</h3>
        </div>
        <div class="container d-flex justify-content-center">
            <!--Formulario fazendo uso do metodo post para enviar dados para a tabela estoque no banco
                de dados controle-estoque.
        -->
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Adicione um item ao estoque:</label>
                        <input type="text" class="form-control" name="item" placeholder="Nome do Item">
                    </div>
                </div>
               <br> 
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Salvar</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>