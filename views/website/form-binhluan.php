<?php
session_start();
require "../../model/pdo.php";
require "../../model/binh-luan.php";
$idsp = $_REQUEST['idsp'];
date_default_timezone_set("Asia/Ho_Chi_Minh");


if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
    $noidung = $_POST['noidung'];
    $name_user = $_SESSION['user']['user_name'];
    $idsp = $_POST['idsp'];
    $timebl = date('h:i:a d-m-Y');
    binh_luan_insert($noidung, $name_user, $idsp, $timebl);

    header("location:" . $_SERVER['HTTP_REFERER']);
}
$listbl = binh_luan_select_all($idsp);

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="binhluan">
        <center>
            <div class="comment">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <?php
                    if (isset($_SESSION['user']) && ($_SESSION['user']  != "")) { ?>
                        <h3>Gửi nhận xét của bạn</h3>
                        <div class="form-ctsp">
                            <input type="hidden" name="idsp" id="" value="<?= $idsp ?>">
                            <center><input type="text" name="noidung" id="" placeholder="Viết nhận xét về sản phẩm...">
                            </center>
                        </div>
                        <input class="nut-binhluan" type="submit" name="guibinhluan" id="" value="Gửi đánh giá">
                    <?php } else { ?>
                        <h3>Gửi nhận xét của bạn</h3>
                        <div class="form-ctsp">
                            <center><input type="text" name="" id="" placeholder="Viết nhận xét về sản phẩm..."></center>
                        </div>
                        <span>Đăng nhập để bình luận <a href="index-website.php?act=dangnhap">Đăng nhập</a></span>
                    <?php } ?>
                </form>
            </div>
        </center>
        <hr>
        <!---->
        <?php foreach ($listbl as $bl) : ?>
            <div class="t-bl">
                <div class="img-ten">
                    <img src="../views/img/anh-dai-dien.jpg" alt="">
                    <h4><?= $bl['name_user'] ?></h4>
                    <p><?= $bl['timebl'] ?></p>
                </div>
                <div class="binhluan-star">
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span><?= $bl['noidung'] ?></span>
                </div>
            </div>
        <?php endforeach ?>
    </section>

</html>