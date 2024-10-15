<?php

if (is_array($user)) {
    extract($user);
}
?>

<div class="form">
    <div class="text-2">
        <h1>Sửa USER</h1>
    </div>
    <form class="form-add" action="index.php?act=updateuser" method="post">
        <div class="name">
            Tên sản User: <br />
            <input type="text" name="user_name" id="" value="<?php if (isset($user_name) && ($user_name != "")) echo $user_name ?>">
        </div>
        <br />
        <div class="dabam">
            EMAIL: <br />
            <input type="email" name="email" id="" value="<?php if (isset($email) && ($email != "")) echo $email ?>">
        </div>
        <br />
        <div class="price">
            Số điện thoại: <br />
            <input type="number" name="sdt" id="" value="<?php if (isset($sdt) && ($sdt != "")) echo $sdt ?>">
        </div>
        <br />
        <div class="price-del">
            Pass: <br />
            <input type="text" name="pass" id="" value="<?php if (isset($pass) && ($pass != "")) echo $pass ?>">
        </div>
        <br />
        <div class="price-del">
            Địa chỉ: <br />
            <input type="text" name="diachi" id="" value="<?php if (isset($diachi) && ($diachi != "")) echo $diachi ?>">
        </div>
        <br />
        <div class="price-del">
            Role: <br />
            <input type="text" name="role" id="" value="<?php if (isset($role) && ($role != "")) echo $role ?>">
        </div>
        <br />
        <div class="btn">
            <input type="hidden" name="id" id="" value="<?php if (isset($id) && ($id > 0)) echo $id ?>">
            <input type="submit" name="capnhapuser" id="" value="Cập nhập">
            <button><a href="index.php?act=listuser">Danh sách sản phẩm</a></button>
        </div>
    </form>
</div>
</div>