<?php
    include('../config/constants.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM tbl_category WHERE id=$id";
        $res = mysqli_query($connection, $sql);
        if($res == true){
            $_SESSION['delete'] = "<div style='color: orange'><h2>Delete successfully</h2></div>";
            header("location:".SITE_URL.'/admin/manage-category.php');
        }else{
            $_SESSION['delete'] = "<div style='color: orange'><h2>Delete failed</h2></div>";
            header("location:".SITE_URL.'/admin/manage-category.php');
        }
    }else{
        echo "failed";
    }
?>