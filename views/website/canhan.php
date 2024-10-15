
<?php
if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
    extract($_SESSION['user']);
}
?>
<!-- -->
<section class="box-text-canhan">
    <nav>
        <ul>
            <li><a href="index-website.php">Trang chủ</a></li>
            <li><a href="#">/</a></li>
            <li><a href="#"><span>Cá nhân</span></a></li>
        </ul>
    </nav>
</section>
<main class="main-canhan">
    <!---->
    <div class="box1-canhan">
        <div class="box1-img-canhan">
            <img src="../views/img/user.jpg" alt="" width="70px" height="70px" />
            <h3><?= $_SESSION['user']['user_name'] ?></h3>
        </div>
        <hr>
        <div class="box1-text-canhan">
            <nav>
                <ul>
                    <li><a href="./index-website.php?act=canhan&link=thongtin"><i class="fa-regular fa-user"></i>Thông
                            tin Tài khoản</a></li>
                    <li><a href="./index-website.php?act=canhan&link=ls"><i class="fa-solid fa-shop"></i>Lịch sử mua
                            hàng</a></li>
                    <?php if ($role == 1) : ?>
                        <li><a href=".././admin/index.php"><i class="fa-solid fa-lock"></i>Quản lý</a></li>
                    <?php endif ?>
                    <li><a href="./index-website.php?act=canhan&link=doimk"><i class="fa-solid fa-lock"></i>Đổi mật
                            khẩu</a></li>
                </ul>
            </nav>
            <hr>
            <a href="./website/dangxuat.php"><button>Đăng Xuất</button></a>
        </div>
    </div>
    <!---->
    <div class="box2-canhan">
        <?php
        if ((isset($_GET['link'])) && ($_GET['link'] != "")) {
            $act = $_GET['link'];
            switch ($act) {
                    //
                case 'thongtin':
                    require_once "./website/canhan/thongtin.php";
                    break;
                case 'ls':
                    require_once "./website/canhan/lichsumuahang.php";
                    break;
                case 'doimk':
                    if (isset($_POST['gui']) && ($_POST['gui'] != "")) {
                        $pass = $_POST['pass'];
                        $newpass = $_POST['newpass'];
                        $user = $_SESSION['user']['user_name'];
                        if ($_POST['pass'] == "") {
                            $errors = "Password ko được  bỏ trắng ";
                        } else {
                            $timuser = timuser($user_name);
                            $_SESSION['user'] = $timuser;
                            if ($timuser['pass'] == $pass) {
                                doimk($newpass, $id);
                                $message = "Đổi mật khẩu  thành công  ";
                                session_unset();
                                // die;
                            } else {
                                $errors = "Mật khẩu không đúng";
                            }
                        }
                    }
                    require_once "./website/canhan/doimk.php";
                    break;
                    // update user
                case 'capnhap-tt':
                    if (isset($_POST['capnhapuser']) && ($_POST['capnhapuser'])) {
                        $id = $_POST['id'];
                        $user_name = $_POST['user_name'];
                        $email = $_POST['email'];
                        $sdt = $_POST['sdt'];
                        $diachi = $_POST['diachi'];
                        user_update1($id, $user_name, $email, $sdt, $diachi);
                        // $_SESSION['user'] = checkuser($mail, $mk);
                        $message = "Cập nhật Thành Công";
                    }
                    require_once "./website/canhan/thongtin.php";
                    break;
                default:
                    require_once "./website/canhan/thongtin.php";
                    break;
            }
        } else {
            require_once "./website/canhan/thongtin.php";
        }
        ?>
    </div>
</main>