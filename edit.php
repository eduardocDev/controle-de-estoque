<?php
include "db_conn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])) {
    $item = $_POST['item'];

    $sql = "UPDATE `estoque` SET `item_name`='$item' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Item Atualizado Com Sucesso");
    }
    else{
        echo "Failed: ". mysqli_error($conn);
    }
}

?>

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
            <h3>Atualizar Item</h3>
        </div>

        <?php
        
        $sql = "SELECT * FROM `estoque` WHERE id = $id LIMIT 1";
        $result =  mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Atualizar:</label>
                        <input type="text" class="form-control" name="item" value="<?php echo $row['item_name']?>">
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