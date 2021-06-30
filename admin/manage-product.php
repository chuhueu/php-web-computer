<?php include('./partials/menu.php') ?>
<!-- Menu Content Section Starts-->
<div class="main-content">
<h1>Manage Product</h1>
<br><br>
<?php
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        if(isset($_SESSION['remove'])){
            echo $_SESSION['remove'];
            unset($_SESSION['remove']);
        }
        if(isset($_SESSION['delete'])){
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if(isset($_SESSION['update'])){
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
?>
<br><br>
<a href="add-product.php" class="btn-primary">Add Product</a>
        <div class="wrapper">
            <table class="tbl-full">
                <tr>
                    <th>STT</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM tbl_product";
                    $res = mysqli_query($connection, $sql);
                    if($res == true){
                        $count = mysqli_num_rows($res);
                        if($count > 0){
                            while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $title = $rows['title'];
                                $des = $rows['description'];
                                $price = $rows['price'];
                                $image_name = $rows['image_name'];
                                $featured = $rows['featured'];
                                $active = $rows['active'];

                                ?>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $title ?></td>
                                    <td><?php echo $des ?></td>
                                    <td><?php echo $price ?></td>
                                    <td>
                                    <?php
                                     if($image_name != ""){
                                        ?>
                                        <img src="../images/product/<?php echo $image_name ?>" style="width: 8rem;">
                                        <?php
                                    }else{
                                        echo "<div style='color: orange'>Image not added</div>";
                                    }
                                ?>
                                    </td>
                                    <td><?php echo $featured ?></td>
                                    <td><?php echo $active ?></td>
                                    <td>
                                        <a href="<?php echo SITE_URL ?>admin/update-product.php?id=<?php echo $id ?>">Update product</a>
                                        <br>
                                        <a href="<?php echo SITE_URL ?>admin/delete-product.php?id=<?php echo $id ?>&image_name=<?php echo $image_name ?>">Delete product</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                    }
                ?>
            </table>
        </div>
</div>

<?php include('./partials/footer.php') ?>