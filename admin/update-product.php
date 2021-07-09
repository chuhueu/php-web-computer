<?php include('./partials/menu.php') ?>

<div class="main-content">
    <h1>Update product</h1>
    <?php
       if(isset($_GET['id'])){
           $id = $_GET['id'];
           $sql = "SELECT * FROM tbl_product WHERE id=$id";
           $res = mysqli_query($connection,$sql);
           if($res == true){
               $count = mysqli_num_rows($res);
               if($count==1){
                    $row = mysqli_fetch_assoc($res);
                    $title = $row['title'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $current_image = $row['image_name'];
                    $featured = $row['featured'];
                    $active = $row['active'];
                    $product_code = $row['product_code'];
               }
           }
       }
    ?>
    <div class="wrapper">
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td><input type="text" name="title" value="<?php echo $title ?>"></td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="30" rows="8"><?php echo $description ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price: </td>
                    <td><input type="text" name="price" value="<?php echo $price ?>"></td>
                </tr>
                <tr>
                    <td>Current Image: </td>
                    <td>
                        <?php
                            if($current_image != ""){
                                ?>
                                <img src="../images/product/<?php echo $current_image ?>" style="width: 10rem;">
                                <?php
                            }else{
                                echo "Image not added";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>New Image: </td>
                    <td><input type="file" name="image_name" ></td>
                </tr>
                <tr>
                    <td>Category: </td>
                    <td>
                        <select name="category">
                            <?php
                            $sql_category = "SELECT * FROM  tbl_category WHERE active = 'Yes' ";
                            $res_category = mysqli_query($connection, $sql_category);
                            $count_category  = mysqli_num_rows($res_category);
                            if ($count_category > 0) {
                                while ($rows = mysqli_fetch_assoc($res_category)) {
                                    $id_category = $rows['id'];
                                    $title_category = $rows['category'];
                            ?>
                                    <option value="<?php echo $id_category ?>"><?php echo $title_category ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes" <?php if($featured=='Yes'){echo "checked";} ?>>Yes
                        <input type="radio" name="featured" value="No"<?php if($featured=='No'){echo "checked";} ?>>No
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes" <?php if($active=='Yes'){echo "checked";} ?>>Yes
                        <input type="radio" name="active" value="No"<?php if($active=='No'){echo "checked";} ?>>No
                    </td>
                </tr>
                <tr>
                    <td>Product Code: </td>
                    <td><input type="text" name="product_code" value="<?php echo $product_code  ?>"></td>
                </tr>
                <tr colspan="2">
                    <td><input type="submit" name="submit" value="Update product" class="btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('./partials/footer.php') ?>

<?php
    if(isset($_POST['submit'])){
        //get data from Form
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category_id = $_POST['category'];
        $featured = $_POST['featured'];
        $active = $_POST['active'];
        $product_code = $_POST['product_code'];
        //upload image
        $image_name = $_FILES['image_name']['name'];
        if($image_name == ""){
            $image_name = $current_image;
        }
        //query into database
        $sql2 = "UPDATE tbl_product SET
                        title = '$title',
                        description = '$description',
                        price = '$price',
                        image_name = '$image_name',
                        category_id = '$category_id',
                        featured = '$featured',
                        active = '$active',
                        product_code = '$product_code'
                        WHERE id = $id;
        ";
        $res2 = mysqli_query($connection, $sql2);
        if($res2==true){
            $_SESSION['update'] = "<div style='color: orange'><h2>Update successfully</h2></div>";
            header("location:".SITE_URL.'admin/manage-product.php');
        }else{
            $_SESSION['update'] = "<div style='color: orange'><h2>Update Failed</h2></div>";
            header("location:".SITE_URL.'admin/manage-product.php');
        }
    }
?>