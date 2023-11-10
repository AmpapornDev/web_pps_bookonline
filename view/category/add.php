<?php
include('../../lib/function.php');
include("../header.php");
include("../nav_menu.php");

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>เพิ่มหมวดหนังสือ</h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="index.php" class="btn btn-dark">กลับหน้าแรก</a>
        </div>
    </div>
    <div class="album py-5">
        <div class="container">
            <form action="../../controller/category/c_add.php" class="row g-3 needs-validation" novalidate method="post" enctype="multipart/form-data" 
            class="row g-3 needs-validation" novalidate >
                <div class="mb-3 row">
                    <label for="validationNamebook" class="col-sm-2 col-form-label">ชื่อหมวดหนังสือ</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" name="name_book_cate" id="validationNamebook" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            กรุณากรอกชื่อหมวดหนังสือ.
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