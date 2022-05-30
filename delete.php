<?php 
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