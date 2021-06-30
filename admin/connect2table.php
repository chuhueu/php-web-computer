<?php include('./partials/menu.php') ?>

<?php
$sql = "SELECT *
            FROM tbl_product p, tbl_category c
            WHERE p.category_id = c.id AND category LIKE '%gaming%'
            LIMIT 4; ";
$res = mysqli_query($connection, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    while ($rows = mysqli_fetch_assoc($res)) {
        $image_name = $rows['image_name'];
        $description = $rows['description'];
        $price = $rows['price'];
        $categoryName = $rows['category'];
        echo "a: ".$categoryName. "  b:  ".$image_name."  c:  ".$price."<br>";
    }
}
?>

<?php include('./partials/footer.php') ?>