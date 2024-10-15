<!---->
<div class="box2">
    <div class="dmk">
        <h1>Đổi mật khẩu</h1>
    </div>
    <hr />
    <div class="form-dmk">
        <form action="index-website.php?act=canhan&link=doimk" method="post">
            <div class="mk-cu">
                Mật khẩu cũ: <br />
                <input type="text" name="pass" id="" />
            </div>
            <br />
            <div class="mk-moi">
                Mật khẩu mới: <br />
                <input type="text" name="newpass" id="" />
            </div>
            <br />
            <div class="doimk-btn">
                <input type="hidden" name="id" id="" value="<?= $id ?>">
                <input type="submit" name="gui" id="" value="Xác nhận đổi mật khẩu" />
                <br>
                <center>
                    <?php
                    if (!isset($_SESSION['user'])) {  ?>
                        <a href="index-website.php?act=dangnhap"><span>Đăng nhập lại</span></a>
                    <?php   } ?>
                </center>
            </div>
            <br>
            <div style="font-weight: 500; font-size: 20px; ; color: orange;">
                <?php
                if (isset($message) && ($message != ""))
                    echo $message;
                ?>
            </div>
            <br>
            <span style="color: red;">
                <?php
                if (isset($errors) && ($errors != ""))
                    echo $errors;
                ?>
            </span>
        </form>
    </div>
</div>