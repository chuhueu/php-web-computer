<?php include('./partials/menu.php') ?>

<div class="main-content">
    <h1>Add Category</h1>
    <div class="wrapper">
    <form action="" method="POST">
        <table class="tbl-30">
            <tr>
                <td>Category: </td>
                <td><input type="text" name="category" placeholder="Enter category" required></td>
            </tr>
            <tr>
                <td>Featured: </td>
                <td>
                    <input type="radio" name="featured" value="Yes" checked>Yes
                    <input type="radio" name="featured" value="No">No
                </td>
            </tr>
            <tr>
                <td>Active: </td>
                <td>
                    <input type="radio" name="active" value="Yes" checked>Yes
                    <input type="radio" name="active" value="No">No
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Add" class="btn-primary"></td>
            </tr>
        </table>
    </form>
    </div>
</div>

<?php include('./partials/footer.php') ?>

<?php
if (isset($_POST['submit'])) {
    //get data from Form
    $category = $_POST['category'];
    $featured = $_POST['featured'];
    $active = $_POST['active'];
    //query
    $sql = "INSERT INTO tbl_category SET
                    category = '$category',
                    featured = '$featured',
                    active = '$active'
                ";
    $res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    if ($res == true) {
        $_SESSION['add'] = "<div style='color: orange'><h2>Added successfully</h2></div>";
        header("location:" . SITE_URL . 'admin/manage-category.php');
    } else {
        $_SESSION['add'] = "<div style='color: orange'><h2>Add category failed</h2></div>";
        header("location:" . SITE_URL . 'admin/add-category.php');
    }
}
?>