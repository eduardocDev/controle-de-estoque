<?php 
//Include realizando conexão com o banco de dados para que seja utilizado o comando delete para realizar
//exclusão dos dados do Sistema
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `estoque` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msm=Dado deletado com sucesso!");
}else{
    echo "Failed: " . mysqli_error($conn);
}


?>