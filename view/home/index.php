<?php

include("../../lib/conect_database.php");
include("../../lib/function.php");
include("../../controller/home/c_list.php");
include("../header.php");
include("../nav_menu.php");
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>รายการหนังสือทั้งหมด</h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="add.php" class="btn btn-sm btn-outline-secondary">
                + เพิ่มรายการหนังสือ
            </a>
        </div>
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
                    <th scope="col">ปกหนังสือ</th>
                    <th scope="col">ชื่อหนังสือ</th>
                    <th scope="col">หมวดหนังสือ</th>
                    <th scope="col">ผู้แต่ง</th>
                    <th scope="col">ราคา</th>
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
                        <td>
                            <a href="detail.php?id=<?php echo $mydata['id_book'] ?>">
                                <img src="../../assets/image/cover_book/<?php echo $mydata['image_book'] ?>" class="img-responsive-80">
                            </a>
                        </td>
                        <td>
                            <a href="detail.php?id=<?php echo $mydata['id_book'] ?>" class="text-link">
                                <div class="text-wrap"><?php echo $mydata['namebook_book']; ?></div>
                            </a>
                        </td>
                        <td><?php echo ListCateBook($mydata['id_book_cate']); ?></td>
                        <td><div class="text-wrap"><?php echo $mydata['author_book']; ?></div></td>
                        <td><?php echo $mydata['price_book']; ?> บาท</td>
                        <td>
                            <a href="edit.php?id=<?php echo $mydata['id_book'] ?>" class="btn btn-sm btn-dark">แก้ไข</a>
                            <a href="../../controller/home/c_delete.php?id=<?php echo $mydata['id_book'] ?>" class="btn btn-sm btn-danger" 
                            onClick="return confirm('คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?');">ลบ</a>
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