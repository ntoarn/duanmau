<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../views/css/header.css">
    <link rel="stylesheet" href="../views/css/banner.css">
    <link rel="stylesheet" href="../views/css/top10-sp.css">
    <link rel="stylesheet" href="../views/css/search.css">
    <link rel="stylesheet" href="../views/css/sanpham.css">
    <link rel="stylesheet" href="../views/css/trangchu.css">
    <link rel="stylesheet" href="../views/css/tin-tuc.css">
    <link rel="stylesheet" href="../views//css/chitietSP.css">
    <link rel="stylesheet" href="../views/css/footer.css">
    <link rel="stylesheet" href="../views/css/canhan.css">
    <link rel="stylesheet" href="../views/css/lichsumuahang.css">
    <link rel="stylesheet" href="../views/css/doimatkhau.css">
    <link rel="stylesheet" href="../views/css/dangky.css">
    <link rel="stylesheet" href="../views/css/dangnhap.css">
    <link rel="stylesheet" href="../views/css/lienhe.css">
    <link rel="stylesheet" href="../views/css/vejbagy.css">
    <link rel="stylesheet" href="../views/css/khuyenmai.css">
</head>

<body onload="anhdau()">
    <header>
        <div class="logo">
            <a href="index-website.php"><img src="img/logo-happy-01_1.png" alt=""></a>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index-website.php">TRANG CHỦ</a></li>
                    <li class="menu-sanpham">
                        <a href="index-website.php?act=shop">SẢN PHẨM</a>
                    </li>
                    <li><a href="index-website.php?act=vejbagy">VỀ JBAGY</a></li>
                    <li><a href="index-website.php?act=khuyenmai">KHUYẾN MÃI</a></li>
                    <li><a href="index-website.php?act=lienhe">LIÊN HỆ</a></li>
                </ul>
            </nav>
        </div>
        <div class="icon">
            <?php if (isset($_SESSION['user'])) {
            ?>
            <i class="fa-solid fa-user"></i>
            <a href="index-website.php?act=canhan"><?= $_SESSION['user']['user_name'] ?></a>
            <?php } else { ?>
            <i class="fa-solid fa-user"></i>
            <a href="index-website.php?act=dangky">Đăng ký</a> |
            <a href="index-website.php?act=dangnhap">Đăng nhập</a>
            <?php } ?>
            <i class="fa-sharp fa-solid fa-cart-shopping"><span>0</span></i>
        </div>
    </header>