<?php
require_once "../model/pdo.php";
require_once "../model/loai.php";
require_once "header-cate.php";
require_once "../model/sanpham.php";
require_once "../model/khach-hang.php";
require_once "../model/binh-luan.php";
require_once "../model/thong-ke.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $category_name = $_POST['category_name'];
                loai_add($category_name);

                $message = "Thêm thành công ";
            }
            require_once "loaisp/add.php";
            break;
        case 'deletedm':
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                loai_delete($_GET['category_id']);
                $message = "Xóa thành công ";
            }
            $category = loadall_category();
            require_once "loaisp/list.php";
            break;
        case 'listdm':
            $category = loadall_category();
            require_once "loaisp/list.php";
            break;
        case 'editdm':
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $dm = loai_select_by_id($_GET['category_id']);
            }
            require_once "loaisp/edit.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $category_id = $_POST['category_id'];
                $category_name = $_POST['category_name'];
                loai_update($category_id, $category_name);
            }
            $category = loadall_category();
            require_once "loaisp/list.php";
            break;

        case 'addsp':
            if (isset($_POST['themmoisp']) && ($_POST['themmoisp'])) {
                $product_name = $_POST['product_name'];
                $sale = $_POST['sale'];
                $file = $_FILES['img'];
                $img = $file['name'];
                move_uploaded_file($file['tmp_name'], "../views/img/" . $img);
                //
                $file = $_FILES['img1'];
                $img1 = $file['name'];
                move_uploaded_file($file['tmp_name'], "../views/img/" . $img1);
                //
                $file = $_FILES['img2'];
                $img2 = $file['name'];
                move_uploaded_file($file['tmp_name'], "../views/img/" . $img2);
                //
                $file = $_FILES['img3'];
                $img3 = $file['name'];
                move_uploaded_file($file['tmp_name'], "../views/img/" . $img3);
                //
                $file = $_FILES['img4'];
                $img4 = $file['name'];
                move_uploaded_file($file['tmp_name'], "../views/img/" . $img4);
                $daban = $_POST['daban'];
                $price = $_POST['price'];
                $price_del = $_POST['price_del'];
                $mota = $_POST['mota'];
                $category_id = $_POST['category_id'];

                sanpham_insert($product_name, $sale, $img, $img1, $img2, $img3, $img4, $daban, $price, $price_del, $mota, $category_id);
                $message = "Thêm thành công ";
            }
            $listall = loadall_category();
            require_once "sanpham/add-sp.php";
            break;
        case 'listsp':
            if (isset($_POST['search-list']) && ($_POST['search-list'])) {
                $key = $_POST['key'];
                $category_id = $_POST['category_id'];
            } else {
                $key = '';
                $category_id = 0;
            }
            $listall = loadall_category();
            $listkey = product_select_keyword($key, $category_id);
            require_once "sanpham/list-sp.php";
            break;
        case 'editsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = product_select_by_id($_GET['id']);
            }
            $listall = loadall_category();
            require_once "sanpham/edit-sp.php";
            break; 
        case 'updatesp':
            if (isset($_POST['capnhapsp']) && ($_POST['capnhapsp'])) {
                $id = $_POST['id'];
                $product_name = $_POST['product_name'];
                $sale = $_POST['sale'];
                $img = $_POST['img'];
                $img1 = $_POST['img1'];
                $img2 = $_POST['img2'];
                $img3 = $_POST['img3'];
                $img4 = $_POST['img4'];
                $daban = $_POST['daban'];
                $price = $_POST['price'];
                $price_del = $_POST['price_del'];
                $mota = $_POST['mota'];
                $category_id = $_POST['category_id'];
                $file = $_FILES['img'];
                if ($file['size'] > 0) {
                    $img = $file['name'];
                    move_uploaded_file($file['tmp_name'], "../views/img/" . $img);
                }
                $file1 = $_FILES['img1'];
                if ($file1['size'] > 0) {
                    $img1 = $file1['name'];
                    move_uploaded_file($file1['tmp_name'], "../views/img/" . $img1);
                }
                $file2 = $_FILES['img2'];
                if ($file2['size'] > 0) {
                    $img2 = $file2['name'];
                    move_uploaded_file($file2['tmp_name'], "../views/img/" . $img2);
                }
                $file3 = $_FILES['img3'];
                if ($file3['size'] > 0) {
                    $img3 = $file3['name'];
                    move_uploaded_file($file3['tmp_name'], "../views/img/" . $img3);
                }
                $file4 = $_FILES['img4'];
                if ($file4['size'] > 0) {
                    $img4 = $file4['name'];
                    move_uploaded_file($file4['tmp_name'], "../views/img/" . $img4);
                }
                product_update($id, $product_name, $sale, $img, $img1, $img2, $img3, $img4, $daban, $price, $price_del, $mota, $category_id);
            }

            $listkey = product_select_all();
            $listall = loadall_category();
            require_once "sanpham/list-sp.php";
            break;
        case 'deletesp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                product_delete($_GET['id']);
                $message = "Xóa thành công ";
            }
            $listkey = product_select_all();
            $listall = loadall_category();
            require_once "sanpham/list-sp.php";
            break;
        case 'adduser':
            if (isset($_POST['themmoiuser']) && ($_POST['themmoiuser'])) {
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $pass = $_POST['pass'];
                $diachi = $_POST['diachi'];
                $role = $_POST['role'];

                user_insert2($user_name, $email, $sdt, $pass, $diachi, $role);
                $message = "Thêm thành công ";
            }
            require_once "khachhang/adduser.php";
            break;
        case 'edituser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $user = user_select_by_id($_GET['id']);
            }
            require_once "khachhang/updatekhachhang.php";
            break;
        case 'updateuser':
            if (isset($_POST['capnhapuser']) && ($_POST['capnhapuser'])) {
                $id = $_POST['id'];
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $pass = $_POST['pass'];
                $diachi = $_POST['diachi'];
                $role = $_POST['role'];
                user_update2($id, $user_name, $email, $sdt, $pass, $diachi, $role);
            }
            $listuser = user_select_all();
            require_once "khachhang/listkhachhang.php";
            break;
        case 'listuser':
            $listuser = user_select_all();
            require_once "khachhang/listkhachhang.php";
            break;
        case 'deleteuser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                user_delete($_GET['id']);
            }
            $listuser = user_select_all();
            require_once "khachhang/listkhachhang.php";
            break;
        case 'listbl':
            $listbl = binhluan_select_all();
            require_once "binhluan/listbinhluan.php";
            break;
        case 'deletbl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                binhluan_delete($_GET['id']);
                $message = "Xóa thành công ";
            }
            $listbl = binhluan_select_all();
            require_once "binhluan/listbinhluan.php";
            break;
        case 'loadtk':
            $listtk = loadall_thongke();
            require_once "thongke/thongke.php";
            break;
        default:
            require_once "home.php";
            break;
    }
} else {
    require_once "home.php";
}




require_once "footer-cate.php";
