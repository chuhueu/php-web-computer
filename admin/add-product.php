<?php include('./partials/menu.php') ?>
<div class="main-content">
    <h1>Add Product</h1>
    <?php
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
    ?>
    <div class="wrapper">
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td><input type="text" name="title" placeholder="Enter title" required></td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description"  cols="30" rows="8" placeholder="Enter description" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price: </td>
                    <td><input type="text" name="price" required></td>
                </tr>
                <tr>
                    <td>Select Image: </td>
                    <td><input type="file" name="image_name" ></td>
                </tr>
                <tr>
                    <td>Category: </td>
                    <td>
                        <select name="category">
                            <?php
                                $sql = "SELECT * FROM  tbl_category WHERE active = 'Yes' ";
                                $res = mysqli_query($connection,$sql);
                                $count  = mysqli_num_rows($res);
                                if($count > 0){
                                    while($rows = mysqli_fetch_assoc($res)){
                                        $id = $rows['id'];
                                        $category = $rows['category'];
                                        ?>
                                        <option value="<?php echo $id ?>"><?php echo $category ?></option>
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
                        <input type="radio" name="featured" value="Yes" checked>Yes
                        <input type="radio" name="featured" value="No" >No
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"  checked>Yes
                        <input type="radio" name="active" value="No">No
                    </td>
                </tr>

                <tr>
                    <td>Product code: </td>
                    <td>
                            <input type="text" name="product_code">
                    </td>
                </tr>
                <tr colspan="2">
                    <td><input type="submit" name="submit" value="Add Product" class="btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include('./partials/footer.php') ?>

<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $des = $_POST['description'];
    $price = $_POST['price'];
    $image_name = $_FILES['image_name']['name'];
    $category = $_POST['category'];
    $featured = $_POST['featured'];
    $active = $_POST['active'];
    $product_code = $_POST['product_code'];

    $sql2 = "INSERT INTO tbl_product SET
                title = '$title',
                description = '$des',
                price = '$price',
                image_name = '$image_name',
                category_id = '$category',
                featured = '$featured',
                active = '$active',
                product_code = '$product_code'
            ";
    $res2 = mysqli_query($connection,$sql2) or die(mysqli_error($connection));
    if($res2 == true){
        echo "hello";
        $_SESSION['add'] = "<div style='color: orange'><h2>Added successfully</h2></div>";
        header("location:".SITE_URL.'admin/manage-product.php');
    }else{
        echo "NO";
        $_SESSION['add'] = "<div style='color: orange'><h2>Added failed</h2></div>";
        header("location:".SITE_URL.'admin/add-product.php');
    }
}
?>