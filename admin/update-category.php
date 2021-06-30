<?php include('./partials/menu.php') ?>

<div class="main-content">
    <h1>Add category</h1>
    <div class="wrapper">
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM tbl_category WHERE id=$id";
            $res = mysqli_query($connection, $sql);
            if ($res == true) {
                $count = mysqli_num_rows($res);
                if ($count == 1) {
                    $row = mysqli_fetch_assoc($res);
                    $category = $row['category'];
                    $featured = $row['featured'];
                    $active = $row['active'];
                }
            }else {
                echo "No data";
            }
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>category: </td>
                    <td><input type="text" name="category" value="<?php echo $category ?>"></td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input <?php if($featured=='Yes'){echo "checked";} ?>  type="radio" name="featured" value="Yes">Yes
                        <input <?php if($featured=='No'){echo "checked";} ?> type="radio" name="featured" value="No">No
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input <?php if($active=='Yes'){echo "checked";} ?> type="radio" name="active" value="Yes">Yes
                        <input <?php if($active=='No'){echo "checked";} ?> type="radio" name="active" value="No">No
                    </td>
                </tr>
                <tr colspan="2">
                    <td>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" name="submit" value="Update Category" class="btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('./partials/footer.php') ?>

<?php
if(isset($_POST['submit'])){
        //get data from Form
        $category = $_POST['category'];
        $featured = $_POST['featured'];
        $active = $_POST['active'];
        //insert data in database
        $sql2 = "UPDATE tbl_category SET
                    category = '$category',
                    featured = '$featured',
                    active = '$active'
                    WHERE id = '$id'
        ";
        //save data in database
        $res2 = mysqli_query($connection,$sql2) or die(mysqli_error($connection));
        if($res2==true){
            $_SESSION['update'] = "<div style='color: orange'><h2>Update successfully</h2></div>";
            header("location:".SITE_URL.'admin/manage-category.php');
        }else{
            $_SESSION['update'] = "<div style='color: wheat'><h2>Update Failed</h2></div>";
            header("location:".SITE_URL.'admin/manage-category.php');
        }
    }
?>