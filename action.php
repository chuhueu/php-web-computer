<?php
    include('./config/constants.php');
    if(isset($_POST['p_id'])){
        $p_id = $_POST['p_id'];
        $p_title = $_POST['p_title'];
        $p_description = $_POST['p_description'];
        $p_price = $_POST['p_price'];
        $p_image = $_POST['p_image'];
        $p_code = $_POST['p_code'];
        $p_quantity = 1;
        //Create a prepared statement
        $stmt = mysqli_prepare($connection, "SELECT product_code FROM tbl_cart WHERE product_code =?");
        //bind parameters for markers
        mysqli_stmt_bind_param($stmt, "s", $p_code);
        /**i: interger
            d: double
            s: string
            b: blob */
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($res);
        $code =  $row['product_code'];
        if(! $code){
            //Object oriented style
            $query = $connection->prepare("INSERT INTO tbl_cart (title, description, price, image_name, quantity, total_price, product_code) VALUES (?,?,?,?,?,?,?)");
            $query -> bind_param("ssssiss",$p_title,$p_description, $p_price, $p_image, $p_quantity, $p_price, $p_code);
            $query->execute();
            echo 'Products added successfully in the cart';
        }
        else{
            echo 'Products already in the cart';
        }
    }
    if(isset($_GET['cartItem']) AND isset($_GET['cartItem']) == 'cart_item'){
        $sql = "SELECT * FROM tbl_cart";
        $res = mysqli_query($connection,$sql);
        $count = mysqli_num_rows($res);
        echo $count;
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM tbl_cart WHERE cartID = $id";
        $res = mysqli_query($connection,$sql);
        if($res == true){
            $_SESSION['delete'] = "<div style='color: orange'><h2>Delete successfully</h2></div>";
            header('location:'.SITE_URL.'cart.php');
        }else{
            $_SESSION['delete'] = "<div style='color: orange'><h2>Delete Failed</h2></div>";
            header('location:'.SITE_URL.'cart.php');
        }
    }

    if(isset($_POST['cartID'])){
        $cartID = $_POST['cartID'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $total_price = $_POST['total_price'];

        $sql = "UPDATE tbl_cart SET
                    quantity = '$qty',
                    total_price = '$total_price'
                    WHERE cartID = $cartID;
        ";
        $res = mysqli_query($connection,$sql);
        if($res == true){

        }
    }
?>
