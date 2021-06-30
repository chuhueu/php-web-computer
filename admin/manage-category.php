<?php include('./partials/menu.php') ?>

<div class="main-content">
    <h1>Category</h1>
    <br><br>
    <?php
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        if(isset($_SESSION['delete'])){
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
    ?>
    <br><br>
    <a href="add-category.php" class="btn-primary">Add Category</a>
    <br><br>
    <div class="wrapper">
        <table class="tbl-full">
            <tr>
                <th>STT</th>
                <th>category</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
            <?php
               $sql = "SELECT * FROM tbl_category";
               $res = mysqli_query($connection,$sql);
               $count = mysqli_num_rows($res);
               if($count > 0){
                   while($rows = mysqli_fetch_assoc($res)){
                       $id = $rows['id'];
                       $category = $rows['category'];
                       $featured = $rows['featured'];
                       $active = $rows['active'];

                        ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $category?></td>
                            <td><?php echo $featured ?></td>
                            <td><?php echo $active ?></td>
                            <td>
                                <a href="<?php echo SITE_URL ?>admin/update-category.php?id=<?php echo $id ?>">Update category</a>
                                <a href="<?php echo SITE_URL ?>admin/delete-category.php?id=<?php echo $id ?>">Delete category</a>
                            </td>
                        </tr>
                        <?php
                   }
               }else{
                   echo "Don't have data in database";
               }
            ?>
        </table>
    </div>
</div>

<?php include('./partials/footer.php') ?>