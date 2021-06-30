<?php include('./partials/menu.php') ?>

<div class="main-content">
    <h1>Admin</h1>
    <?php
    if (isset($_SESSION['add'])) {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    ?>
    <br><br>
    <a href="add-admin.php" class="btn-primary">Add Admin</a>
    <div class="wrapper">
        <table class="tbl-full">
            <th>STT</th>
            <th>Full Name</th>
            <th>User Name</th>
            <th>Actions</th>
            <?php
            //get data in database
            $sql = "SELECT * FROM tbl_admin";
            $res = mysqli_query($connection, $sql);
            $count = mysqli_num_rows($res);
            if ($count > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    $id = $rows['id'];
                    $full_name = $rows['full_name'];
                    $username = $rows['username'];
            ?>
                    <tr>
                        <td><?php echo $id ?> </td>
                        <td><?php echo $full_name ?></td>
                        <td><?php echo $username ?></td>
                        <td>
                            <a href="">Update Admin</a>
                            <a href="">Delete Admin</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>

    </div>
</div>

<?php include('./partials/footer.php') ?>