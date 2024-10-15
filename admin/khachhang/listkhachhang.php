<div class="list-sp">
    <div class="text-sp">
        <h2>Danh sách User</h2>
    </div>
    <br>
    <div style="font-weight: 500; font-size: 20px; ; color: black;">
        <?php
        if (isset($message) && ($message != ""))
            echo $message;
        ?>
    </div>
    <br>
    <table border="1px" class="table-sp">
        <tr>
            <th></th>
            <th>ID</th>
            <th>USER_NAME</th>
            <th>EMAIL</th>
            <th>SDT</th>
            <th>PASS</th>
            <th>Địa chỉ</th>
            <th>ROLE</th>
            <th></th>
        </tr>
        <?php foreach ($listuser as $user) : ?>
            <tr>
                <th><input type="checkbox" name="" id="" /></th>
                <th><?= $user['id'] ?></th>
                <th><?= $user['user_name'] ?></th>
                <th><?= $user['email'] ?></th>
                <th><?= $user['sdt'] ?></th>
                <th><?= $user['pass'] ?></th>
                <th><?= $user['diachi'] ?></th>
                <th><?= $user['role'] ?></th>
                <th class="sua-xoa">
                    <button><a href="index.php?act=edituser&id=<?= $user['id'] ?>">Sửa</a></button>
                    <button><a href="index.php?act=deleteuser&id=<?= $user['id'] ?>">Xóa</a></button>
                </th>
            </tr>
        <?php endforeach ?>
    </table>
    <div class="btn-list">
        <input type="button" value="Chọn tất cả" />
        <input type="button" value="Bỏ chọn tất cả" />
        <input type="button" value="Xóa các mục đã chọn" />
        <a href="index.php?act=adduser"><input type="button" value="Nhập thêm" /></a>
    </div>
</div>