<?php
include_once ('../../config.php');
include_once ('../../functions.php');

//if(isset($_GET['id'])) {
//    $query = query("DELETE FROM ORDERS WHERE order_id=".escape_string($_GET['id']));
//    confirm($query);
//    redirect("../../admin/index.php?orders");
//    set_message("Order Deleted");
//}else{
//    redirect('../../admin/index.php?orders');
//}

if(isset($_GET['id'])) {
    $query = query("DELETE FROM products WHERE product_id=".escape_string($_GET['id']));
    set_message("Product Deleted");
    redirect('../../admin/index.php?view_product');

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Delete Product Page</h1>
</body>
</html>