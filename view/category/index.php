<?php

include("../../lib/conect_database.php");
include("../../lib/function.php");
include("../../controller/category/c_list.php");
include("../header.php");
include("../nav_menu.php");

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>หมวดหนังสือ</h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="add.php" class="btn btn-sm btn-outline-secondary">
                + เพิ่มหมวดหนังสือ
            </a>
        </div>
    </div>
    <?php

    if (isset($_GET['status']) and $_GET['status'] != '') {
        echo getAlert($_GET['status']);
    }
    ?>
    <div class="table-responsive">

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อหมวด</th>
                    <th scope="col">จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if (isset($rows) and $rows) {
                    foreach ($rows as $mydata) {
                ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $mydata['name_book_cate']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $mydata['id_book_cate'] ?>" class="btn btn-sm btn-dark">แก้ไข</a>
                                <a href="../../controller/category/c_delete.php?id=<?php echo $mydata['id_book_cate'] ?>" class="btn btn-sm btn-danger" 
                                onClick="return confirm('คุณต้องการที่จะลบข้อมูลนี้หรือไม่?, หนังสือจะถูกอัพเดทเป็นไม่มีหมวด');">ลบ</a>
                            </td>
                        </tr>

                    <?php }
                } else {
                    ?>
                    <tr>
                        <td colspan='3' align="center"> No Record.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<?php
include("../footer.php");
?>