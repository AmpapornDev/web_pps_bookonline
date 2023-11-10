<?php

include('../../lib/conect_database.php');
include('../../lib/function.php');
include('../../controller/admin_login/c_list_id.php');
include('../header.php');
include('../nav_menu.php');

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>แก้ไขรายละเอียด Admin</h3>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="index.php" class="btn btn-dark">กลับหน้าแรก</a>
        </div>
    </div>
    <?php
    if ((isset($_GET['status']) and $_GET['status'] != '') and ($_GET['status'] == 'success' or $_GET['status'] == 'error')) {
        echo getAlert($_GET['status']);
    }
    ?>
    <div class="container py-5">
        <form action="../../controller/admin_login/c_update.php" method="post" class="row g-3 needs-validation" novalidate>

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">ชื่อ <span class="span-red">*</span></label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" class="form-control" id="inputPassword" name="name_admin" value="<?php echo $data['name_admin'] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">นามสกุล <span class="span-red">*</span></label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" class="form-control" id="inputPassword" name="lastname_admin" value="<?php echo $data['lastname_admin'] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">อีเมล์ <span class="span-red">*</span></label>
                <div class="col-sm-10 col-md-6">
                    <input type="email" class="form-control" id="inputPassword" name="email_admin" value="<?php echo $data['email_admin'] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"> </label>
                <div class="col-sm-10 col-md-6">
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                    <a href="index.php" class="btn btn-primary mb-3">Back</a>
                </div>
            </div>
        </form>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Reset Password</h3>
    </div>
    <?php

    if ((isset($_GET['status']) and $_GET['status'] != '') and ($_GET['status'] == 'success_pass' or $_GET['status'] == 'error_pass')) {
        echo getAlert($_GET['status']);
    }

    ?>
    <div class="container py-5">
        <form id="my-form" action="../../controller/admin_login/c_reset_password.php" method="post" class="row g-3 needs-validation" novalidate>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label"> Password <span class="span-red">*</span></label>
                <div class="col-sm-4">
                    <input type="password" class="form-control pass" name="password" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter new password.
                    </div>

                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Retry Password <span class="span-red">*</span></label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="password_confirm" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Password not a match.
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label"> </label>
                <div class="col-sm-9">
                    <button id="submitBtn" type="submit" class="btn btn-primary mb-3">Save</button>
                    <a href="index.php" class="btn btn-primary mb-3">Back</a>
                </div>
            </div>
        </form>
    </div>
</main>

<?php
include("../footer.php");
?>