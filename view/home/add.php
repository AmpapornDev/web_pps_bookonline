<?php
include('../../lib/function.php');
include("../header.php");
include("../nav_menu.php");
?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>เพิ่มรายการหนังสือ</h3>
        <div class="btn-toolbar mb-2 mb-md-0">

            <a href="index.php" class="btn btn-dark">กลับหน้าแรก</a>
        </div>
    </div>
    <div class="album py-5">
        <div class="container">

            <form action="../../controller/home/c_add.php" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                <div class="mb-3 row">
                    <label for="validationBookCate" class="col-sm-2 col-form-label">หมวดหนังสือ</label>
                    <div class="col-sm-6">
                        <?php echo selectCateBook('');?>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please specify ISBN.
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="validationNamebook" class="col-sm-2 col-form-label">ชื่อหนังสือ</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="namebook_book" id="validationNamebook" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please specify Namebook.
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="validationISBN" for="inputPassword" class="col-sm-2 col-form-label">ISBN</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="isbn_book" id="validationISBN" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please specify ISBN.
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="validationAuthor" class="col-sm-2 col-form-label">ผู้แต่ง</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="author_book" id="validationAuthor" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please specify Author.
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="validationPrice" class="col-sm-2 col-form-label">ราคา</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="price_book" id="validationPrice" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please specify Price.
                        </div>
                    </div>
                    <label for="validationPrice" class="col-sm-2 col-form-label">บาท</label>
                </div>
                <div class="mb-3 row">
                    <label for="validationImage" class="col-sm-2 col-form-label">รูป</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image_book" id="validationImage" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please specify Image.
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="validationCuntent" class="col-sm-2 col-form-label">รายละเอียด</label>
                    <div class="col-sm-10">
                        <textarea class="form-control"  rows="3" name="detail_book" id="validationCuntent" required></textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please specify Content.
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"> </label>
                    <div class="col-sm-10">
                        <button type="submit" id="submit" class="btn btn-primary mb-3">Save</button>
                        <a href="index.php" class="btn btn-primary mb-3">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include("../footer.php");
?>