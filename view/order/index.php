<?php

include("../../lib/conect_database.php");
include("../../lib/function.php");
include("../../controller/order/c_list.php");
include("../header.php");
include("../nav_menu.php");
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>รายการสั่งซื้อทั้งหมด</h3>
    </div>
    <div class="table-responsive">
        <?php

        if (isset($_GET['status']) and $_GET['status'] != '') {
            echo getAlert($_GET['status']);
        }
        ?>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">รายละเอียดผู้สั่ง</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">จำนวน<br/>(เล่ม)</th>
                    <th scope="col">ราคารวม</th>
                    <th scope="col">ค่าส่ง EMS</th>
                    <th scope="col">ราคาสุทธิ</th>
                    <th scope="col">วิธีชำระเงิน</th>
                    <th scope="col">จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($rows as $mydata) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $mydata['name_member']?> <?php echo $mydata['lastname_member']?>
                        (<?php echo $mydata['mobile_member']?>)
                    </td>
                        <td><?php echo $mydata['order_no_payment']?></td>
                        <td><?php echo $mydata['total_qty_payment']?></td>
                        <td><?php echo $mydata['total_price_payment']?></td>
                        <td><?php echo $mydata['total_delivery_payment']?></td>
                        <td><?php echo $mydata['total_amount']; ?></td>
                        <td><?php echo ListBank($mydata['id_bank']); ?></td>
                        <td>
                            <a href="detail.php?id_payment=<?php echo $mydata['id_payment'] ?>" class="btn btn-sm btn-dark">รายละเอียด</a>
                           
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php
include("../footer.php");
?>