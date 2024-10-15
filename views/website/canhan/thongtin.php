<div class="tt-tk-canhan">
    <h1>Thông tin tài khoản</h1>
    <p>Bạn có thể cập nhật thông tin của mình ở trang này</p>
</div>
<hr>
<div class="form-canhan">
    <form action="index-website.php?act=canhan&link=capnhap-tt" method="post">
        <div class="hoten-canhan">
            User Name: <br>
            <input type="text" name="user_name" id="" value="<?php if (isset($user_name) && ($user_name != "")) echo $user_name ?>">
        </div>
        <br>
        <div class="email-canhan">
            Email: <br>
            <input type="email" name="email" id="" value="<?php if (isset($email) && ($email != "")) echo $email ?>">
        </div>
        <br>
        <div class="sdt-canhan ">
            Số điện thoại: <br>
            <input type="number" name="sdt" id="" value="<?php if (isset($sdt) && ($sdt != "")) echo $sdt ?>">
        </div>
        <br>
        <div class="dc-xa">
            Đia Chỉ: <br>
            <input type="text" name="diachi" id="" value="<?php if (isset($diachi) && ($diachi != "")) echo $diachi ?>">
        </div>
        <br>
        <center>
            <?php
            if (isset($message) && ($message != ""))
                echo $message;
            ?>
        </center>
        <br>
        <div class="tt-btn">
            <input type="hidden" name="id" id="" value="<?php if (isset($id) && ($id > 0)) echo $id ?>">
            <input type="submit" name="capnhapuser" id="" value="Xác nhận Thông Tin">
        </div>
    </form>
</div>