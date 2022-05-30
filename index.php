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
        <a href="add_new.php" class="btn btn-dark mb-3">Adicionar Novo</a>

        <table class="table table-hover text-center">
         <thead class="table-dark">
           <tr>
             <th scope="col">Item</th>
             <th></th>
             <th></th>
           </tr>
         </thead>
         <tbody>
            <?php
            include "db_conn.php";
                $sql = "SELECT * FROM `estoque`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row['item_name'] ?></td>
                            <td><a href="" class="link-dark">Update</a></td>
                            <td><a href="" class="link-dark">Delete</a></td>
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