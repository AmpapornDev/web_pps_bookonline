<?php

include('../../lib/conect_database.php');
include('../../lib/function.php');
include('../../controller/order/c_detail.php');
include('../header.php');
include('../nav_menu.php');
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3> </h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="index.php" class="btn btn-dark">กลับหน้าแรก</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>
                <h6><strong>Order Number : <?php echo $dataPayment['order_no_payment'] ?></strong></h6>
                <h6><strong>ชื่อที่อยู่ผู้รับ : </strong></h6>
                <p class="detail-book">
                    <?php echo $dataPayment['name_member'] ?> <?php echo $dataPayment['lastname_member'] ?> (<?php echo $dataPayment['mobile_member'] ?>)
                </p>
                <p class="detail-book">ที่อยู่ <?php echo $dataPayment['address_member'] ?></p>
                <p class="detail-book">
                    ตำบล/เขต <?php echo $dataPayment['district_member'] ?>
                    อำเภอ/แขวง <?php echo $dataPayment['amphur_member'] ?>
                    จังหวัด <?php echo $dataPayment['province_member'] ?>
                    รหัสไปรษณีย์ <?php echo $dataPayment['postcode_member'] ?>
                </p>
                <h6><strong>วิธีชำระเงิน : โอนเงิน <?php echo ListBank($dataPayment['id_bank']);?></strong></h6>

            </div>
        </div>
        <hr/>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ปกหนังสือ</th>
                        <th scope="col">รายละเอียดหนังสือ</th>
                        <th scope="col" class="text-center">ราคา</th>
                        <th scope="col" class="text-center">จำนวน</th>
                        <th scope="col" class="text-center">ราคาสุทธิ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $mydata) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><img src="../../assets/image/cover_book/<?php echo $mydata['image_book'] ?>" class="img-responsive-80"></td>
                            <td>ISBN : <?php echo $mydata['isbn_book'] ?></br>
                                ชื่อหนังสือ : <?php echo $mydata['namebook_book'] ?></br>
                                ผู้แต่ง : <?php echo $mydata['author_book'] ?></br>
                                หมวด : <?php echo ListCateBook($mydata['id_book_cate']); ?>
                            </td>
                            <td align="center"><?php echo $mydata['price_book'] ?></td>
                            <td align="center"><?php echo $mydata['qty_book'] ?></td>
                            <td align="center"><?php echo ($mydata['price_book'] *  $mydata['qty_book']); ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="5" align="right"><strong>ราคารวม</strong></td>
                        <td align="center"><strong><?php echo number_format($dataPayment['total_price_payment'],2) ?></strong></td>
                    </tr>
                    <tr>
                        <td colspan="5" align="right"><strong>จำนวนรวม</strong></td>
                        <td align="center"><strong><?php echo $dataPayment['total_qty_payment'] ?></strong></td>
                    </tr>
                    <tr>
                        <td colspan="5" align="right"><strong>ค่าส่ง</strong></td>
                        <td align="center"><strong><?php echo $dataPayment['total_delivery_payment'] ?></strong></td>
                    </tr>
                    <tr>
                        <td colspan="5" align="right"><strong>ราคารวมทั้งหมด</strong></td>
                        <td align="center"><strong><?php echo number_format($dataPayment['total_amount'],2)?></strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php
include('../footer.php');
?>