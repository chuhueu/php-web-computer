<?php include('../config/constants.php') ?>

<?php
    if(isset($_GET['id']) AND isset($_GET['image_name'])){
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];
        /*if($image_name != ""){
            $path = "../images/product/".$image_name;
            //remove link
            $remove = unlink($path);
            if($remove == false){
                $_SESSION['remove'] = "remove failed";
                //stop the process
                die();
            }
        }*/
        $sql = "DELETE FROM tbl_product WHERE id = $id";
        $res = mysqli_query($connection,$sql);
        if($res == true){
            $_SESSION['delete'] = "<div style='color: orange'><h2>Delete successfully</h2></div>";
            header('location:'.SITE_URL.'admin/manage-product.php');
        }else{
            $_SESSION['delete'] = "<div style='color: orange'><h2>Delete failed</h2></div>";
            header('location:'.SITE_URL.'admin/manage-product.php');
        }
    }else{
        header('location:'.SITE_URL.'admin/manage-product.php');
    }
?>