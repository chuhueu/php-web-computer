<?php include('./partials/menu.php') ?>

<div class="main-content">
    <h1>Add Admin</h1>
    <form action="" method="POST">
        <label for="">Full Name: </label>
        <input type="text" name="full_name" placeholder="Enter your full name" required><br><br>
        <label for="">Username: </label>
        <input type="text" name="username" placeholder="Enter your username" required><br><br>
        <label for="">Password: </label>
        <input type="password" name="password" placeholder="Enter your password" required><br><br>

        <input type="submit" name="submit" value="Submit" class="btn-primary">
    </form>
</div>

<?php include('./partials/footer.php') ?>

<?php
    if(isset($_POST['submit'])){
        //get data form Form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        //query
        $sql = "INSERT INTO tbl_admin SET
                    full_name = '$full_name',
                    username = '$username',
                    password = '$password'
                    ";
        $res = mysqli_query($connection,$sql) or die(mysqli_errno($connection));
        if($res == true){
            $_SESSION['add'] = "Admin added successfully";
            header("location:".SITE_URL.'admin/manage-admin.php');
        }else{
            $_SESSION['add'] = "Admin added fail";
            header("location:".SITE_URL.'admin/add-admin.php');
        }
    }
?>