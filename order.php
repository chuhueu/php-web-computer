<?php
    include('./config/constants.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT id, title, description, price FROM tbl_product WHERE id=$id";
        $res = mysqli_query($connection,$sql);
        if($res == true){
            $count = mysqli_num_rows($res);
            if($count == 1){
                $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
                echo json_encode($rows);
            }
        }else{
            echo "Not Found";
        }
    }
?>