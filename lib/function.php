<?php

function getAlert($status)
{

    if ($status == 'success') {

        $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Successfully processed. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }else if ($status == 'success_pass') {

        $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Reset password successfully. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }else if ($status == 'error') {
        $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> Processing failed, please try again. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }else if ($status == 'error_pass') {
        $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> Password and confirm password not match, please try again. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    return $alert;
}

function getLinkActiveMenu($uri)
{
    //.../dashboard_bookonline/view/category/index.php
    list($uri1, $uri2, $uri3, $uri4) = explode('/', $_SERVER['REQUEST_URI']);
    if ($uri4 == 'home') {
        $data = 'home';
    } else if ($uri4 == 'category') {
        $data = 'category';
    }
    return $data;
}

function selectCateBook($value)
{

    include('conect_database.php');
    $sql = "select id_book_cate, name_book_cate from tb_book_category order by id_book_cate asc";
    $query = $mysqli->query($sql);

    $data = '<select class="form-select" name="id_book_cate" aria-label="Default select example required">
    <option>-- เลือก --</option>';
    while ($result = $query->fetch_assoc()) {
        if ($value == '') {
            $data .= '<option value="' . $result['id_book_cate'] . '">' . $result['name_book_cate'] . '</option>';
        } else {

            $data .= '<option ';
            if ($value == $result['id_book_cate']) {
                $data .= 'selected';
            }

            $data .= ' value="' . $result['id_book_cate'] . '">' . $result['name_book_cate'] . '</option>';
        }
    }
    $data .= '</select>';
    return $data;
}

function ListCateBook($value)
{

    include('conect_database.php');
    if ($value == '0') {
        $rec = '';
    } else {
        $sql = "select name_book_cate from tb_book_category where id_book_cate = '" . $value . "' ";
        $query = $mysqli->query($sql);
        $data = $query->fetch_assoc();
        $rec = $data['name_book_cate'];
    }
    return $rec;
}

function ListBank($value){
    include('conect_database.php');
    if ($value == '0') {
        $rec = '';
    } else {
        $sql = "select name_bank from tb_acc_bank where id_acc_bank = '" . $value . "' ";
        $query = $mysqli->query($sql);
        $data = $query->fetch_assoc();
        $rec = $data['name_bank'];
    }
    return $rec;
}



