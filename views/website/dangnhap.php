<!---->
<section class="box-text">
    <ul>
        <li><a href="index-website.php">Trang chủ</a></li>
        <li><a href="#">/</a></li>
        <li><a href="#"><span>Đăng Nhập</span></a></li>
    </ul>
</section>
<!---->
<div class="dangnhap-user">
    <form class="form-dangnhap" action="./index-website.php?act=dangnhap" method="post">
        <h1>Đăng Nhập</h1>
        <div class="input-box">
            <input type="text" name="user_name" id="" placeholder="Tên đăng nhập" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" name="pass" id="" placeholder="Mật khẩu" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <!---->
        <center>
            <div style="font-weight: 500; font-size: 20px; color: red;"><?= $message['user'] ?? "" ?></div>
        </center>
        <!---->
        <br>
        <div class="remember-forgot">
            <label><input type="checkbox" name="" id="">Nhớ mật khẩu</label>
            <a href="index-website.php?act=quenmk">Quên mật khẩu</a>
        </div>
        <input type="submit" class="btn" name="dangnhap" value="Đăng nhập">
        <div class="register">
            <p>Không có tải khoản? <a href="index-website.php?act=dangky">Đăng ký ngay</a></p>
        </div>
    </form>
</div>
<!---->