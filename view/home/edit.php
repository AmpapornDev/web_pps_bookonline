<?php

include('../../lib/conect_database.php');
include('../../lib/function.php');
include('../../controller/home/c_detail.php');
include('../header.php');
include('../nav_menu.php');

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>แก้ไขรายการหนังสือ</h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="index.php" class="btn btn-dark">กลับหน้าแรก</a>
        </div>
    </div>
    <?php
    if (isset($_GET['status']) and $_GET['status'] != '') {
        echo getAlert($_GET['status']);
    }
    ?>

    <div class="container py-5">
        <form action="../../controller/home/c_update.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">หมวดหนังสือ</label>
                <div class="col-sm-10">
                    <?php echo selectCateBook($data['id_book_cate']); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">ชื่อหนังสือ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="namebook_book" value="<?php echo $data['namebook_book'] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">ISBN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="isbn_book" value="<?php echo $data['isbn_book'] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">ผู้แต่ง</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" name="author_book" value="<?php echo $data['author_book'] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">ราคา</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputPassword" name="price_book" value="<?php echo $data['price_book'] ?>">
                </div>
                <label for="inputPassword" class="col-sm-2 col-form-label">บาท</label>
            </div>
            <div class="mb-3 row">

                <label for="inputPassword" class="col-sm-2 col-form-label">รูป</label>
                <div class="col-sm-10">
                    <img src="../../assets/image/cover_book/<?php echo $data['image_book'] ?>" class="img-responsive-180" alt="<?php echo $data['namebook_book'] ?>">
                    <input type="file" class="form-control" id="inputPassword" name="image_book">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">รายละเอียด</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail_book"><?php echo $data['detail_book'] ?></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"> </label>
                <div class="col-sm-10">
                    <input name="id" type="hidden" value="<?php echo $data['id_book'] ?>">
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                    <a href="index.php" class="btn btn-primary mb-3">Back</a>
                </div>
            </div>
        </form>
    </div>

</main>

<?php
include("../footer.php");
?>