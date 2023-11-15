<?php

$id_payment = $_GET['id_payment'];

$sql = "SELECT * FROM tb_payment left join tb_member on  tb_payment.id_member = tb_member.id_member where id_payment = '" . $id_payment . "'";
$query = $mysqli->query($sql);
$count_row = $query->num_rows;
if ($count_row > 0) {

    $dataPayment = $query->fetch_assoc();
} else {
    $dataPayment = 'null';
}


$sql_cart = "SELECT * FROM tb_cart_order left join tb_book on  tb_cart_order.id_book = tb_book.id_book where tb_cart_order.id_payment = '" . $id_payment . "'";
$query_cart = $mysqli->query($sql_cart);
$count_row_cart = $query_cart->num_rows;
if ($count_row_cart > 0) {

    while ($result = $query_cart->fetch_assoc()) {
        $data[] = $result;
    }
} else {
    $data = 'null';
}
