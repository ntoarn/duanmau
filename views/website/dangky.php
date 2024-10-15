<!---->
<section class="box-text">
    <ul>
        <li><a href="index-website.php">Trang chủ</a></li>
        <li><a href="#">/</a></li>
        <li><a href="#"><span>Đăng ký</span></a></li>
    </ul>
</section>
<!---->
<div class="dangky-user">
    <form class="form-dangky" action="./index-website.php?act=dangky" method="post">
        <h1>ĐĂNG KÝ</h1>
        <div class="input-box">
            <input type="text" name="user_name" id="" placeholder="Vui lòng nhập Tên đăng nhập" required>
        </div>
        <div class="input-box">
            <input type="text" name="email" id="" placeholder="Vui lòng nhập email " required>
        </div>
        <div class="input-box">
            <input type="number" name="sdt" id="" placeholder="Vui lòng nhập Số điện thoại" required>
        </div>
        <div class="input-box">
            <input type="password" name="pass" id="" placeholder="Mật Khẩu" required>
        </div>
        <div class="input-box">
            <input type="password" name="nlpass" id="" placeholder="Xác nhận mật khẩu" required>
        </div>
        <!---->
        <?php if (isset($message) && ($message != "")) : ?>
            <div style="font-weight: 500; font-size: 20px;color: blue;"><?= $message['tc'] ?? "" ?></div>
            <div style="font-weight: 500; font-size: 20px; color: red;"><?= $message['loi'] ?? "" ?></div>
        <?php endif ?>
        <br>
        <br>
        <!---->
        <div class="remember-forgot">
            <label><input type="checkbox" name="" id="">Tôi đồng ý với các điều khoản & Chính sách.</label>
        </div>
        <input type="submit" class="btn" name="dangky" value="Đăng ký">
        <div class="register">
            <p>Đã có tài khoản? <a href="index-website.php?act=dangnhap">Đăng nhập</a></p>
        </div>
    </form>
</div>
<!---->