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
    <form class="form-dangnhap" action="./index-website.php?act=quenmk" method="post">
        <h1>Quên Mật Khẩu</h1>
        <div class="input-box">
            <input type="email" name="email" id="" placeholder="Email" required>
        </div>

        <!---->
        <center>
            <div style="font-weight: 500; font-size: 20px; color: red;">
                <?php
                if (isset($checkmail) && ($checkmail != ""))
                    echo $checkmail;
                ?>
            </div>
        </center>
        <!---->
        <br>
        <div class="btn-quenmk">
            <input type="submit" name="guiemail" id="" value="Gửi">
            <input type="reset" name="" id="" value="Nhập lại">
            <a href="index-website.php?act=dangnhap"><input type="text" name="" id="" value="Đăng nhập"></a>
        </div>
    </form>
</div>
<!---->