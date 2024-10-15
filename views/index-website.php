<?php
session_start();
require_once "../model/pdo.php";
require_once "../model/loai.php";
require_once "../model/PHPMailer-master/src/Exception.php";
require_once "../model/PHPMailer-master/src/PHPMailer.php";
require_once "../model/PHPMailer-master/src/SMTP.php";
require_once "../model/sanpham.php";
require_once "../model/khach-hang.php";
require_once "headerweb-website.php";
$products = product_select_all();
$dstop10 = hang_hoa_select_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            //
        case 'locsanpham':
            if (isset($_POST['key']) && ($_POST['key'] != "")) {
                $key = $_POST['key'];
            } else {
                $key = "";
            }
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $category_id = $_GET['category_id'];
            } else {
                $category_id = 0;
            }
            $listall = loadall_category();
            $products = product_select_keyword($key, $category_id);
            // $tendm = product_tendm($category_id);
            require_once "website/sanphamloc.php";
            break;
        case 'shop':
            $products = product_select_all();
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            } else {
                $id = "";
            }
            $listall = loadall_category();
            require_once "../views/website/sanpham.php";
            break;
            //
        case 'ctsp':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $products =  product_select_by_id($id);
                extract($products);
                $productscl = load_product_cungloai($id, $category_id);
                $luotxem = product_tang_luot_xem($id);
                require_once "../views/website/chitietSP.php";
            } else {
                require_once "website/trangchu.php";
            }
            break;
            //
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $pass = $_POST['pass'];
                $nlpass = $_POST['nlpass'];
                if ($pass == $nlpass) {
                    user_insert($user_name, $email, $sdt, $pass);
                    $message['tc'] = "Đăng ký thành công ";
                } else {
                    $message['loi'] = "Mật khẩu không khớp ";
                }
            }
            require_once "website/dangky.php";
            break;
            //
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user_name = $_POST['user_name'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user_name, $pass);
                if ($user_name == "" && $pass == "") {
                    $message['user_name'] = "user không được bỏ trống";
                    $message['pass'] = "Mât khẩu không được bỏ trống";
                } else {
                    $checkuser = checkuser($user_name, $pass);
                    if ($checkuser) {
                        if ($checkuser['role'] == 0) {
                            $_SESSION['user'] = $checkuser;
                            header("location: index-website.php");
                            exit;
                        } else {
                            $_SESSION['user'] = $checkuser;
                            header("location: index-website.php");
                            exit;
                        }
                    } else {
                        $message['user'] = "Tài khoản hoặc mật khẩu sai";
                    }
                }
            }
            require_once "website/dangnhap.php";
            break;
            //
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'] != "")) {
                $email = $_POST['email'];
                $checkmail = checkmail($email);
                // if (is_array($checkmail)) {
                //     $message = "Mật khẩu của bạn là :" . $checkmail['pass'];
                // } else {
                //     $message = "Email của bạn không tồn tại";
                // }
            }
            include "website/quenmk.php";
            break;
            //
        case 'canhan':
            require_once "website/canhan.php";
            break;
            //
        case 'vejbagy':
            require_once "website/vejbagy.php";
            break;
            //
        case 'khuyenmai':
            require_once "website/khuyenmai.php";
            break;
            //
        case 'lienhe':
            require_once "website/lienhe.php";
            break;
            //
        case 'formbl':
            require_once "website/binhluan/form-binhluan.php";
            break;
            //
        case 'thoat':
            session_unset();
            require_once "website/trangchu.php";
            break;
        default:
            require_once "website/trangchu.php";
            break;
    }
} else {
    require_once "website/trangchu.php";
}

require_once "footer-website.php";
