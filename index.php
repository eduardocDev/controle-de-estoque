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
    <!--navbar-->
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: cyan;">
        Controle de estoque
    </nav>
    <!-- container com tabela para apresentação dos elementos-->
    <div class="container">
        <?php
          //div que recebera alerta informando ações realizadas com os itens do estoque
        if(isset($_GET['msg'])){
          $msg = $_GET['msg'];
          echo '<div class="alert alert-success" role="alert">
          '.$msg.'
        </div>';
        }

        ?>

        <a href="add_new.php" class="btn btn-dark mb-3">Adicionar Novo</a>

        <table class="table table-hover text-center">
         <thead class="table-dark">
           <tr>
             <th scope="col">Item</th>
             <th></th>
             <th></th>
           </tr>
         </thead>
         <!--Corpo da tabela-->
         <tbody>
            <?php
            //Inclusão da conexão com o bando de dados para realizar operações usando comando SQL
            include "db_conn.php";
                $sql = "SELECT * FROM `estoque`";
                $result = mysqli_query($conn, $sql);
                  //comando while para permitir que o resultado decorrente da demonstração dos itens inseridos 
                  //seja passivel de serem deletado sou modificados atraves dos comandos DML(data modification language) 
                  //UPDATE ou DELETE
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row['item_name'] ?></td>
                            <td><a href="edit.php?id=<?php echo $row['id']?>" class="link-dark">Update</a></td>
                            <td><a href="delete.php?id=<?php echo $row['id']?>" class="link-dark">Delete</a></td>
                        </tr>
                    <?php
                }
            ?>

         </tbody>
</table>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>