<div class="list-sp">
    <div class="text-sp">
        <h2>Danh sách Bình Luận</h2>
    </div>
    <br>
    <div style="font-weight: 500; font-size: 20px; ; color: black;">
        <?php
        if (isset($message) && ($message != ""))
            echo $message;
        ?>
    </div>
    <bssr>
        <table border="1px" class="table-sp">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nội dung</th>
                <th>Name user</th>
                <th>ID sp</th>
                <th>TimeBL</th>
                <th></th>
            </tr>
            <?php foreach ($listbl as $bl) : ?>
                <tr>
                    <th><input type="checkbox" name="" id="" /></th>
                    <th><?= $bl['id'] ?></th>
                    <th><?= $bl['noidung'] ?></th>
                    <th><?= $bl['name_user'] ?></th>
                    <th><?= $bl['idsp'] ?></th>
                    <th><?= $bl['timebl'] ?></th>
                    <th class="sua-xoa">
                        <button><a href="index.php?act=deletbl&id=<?= $bl['id'] ?>">Xóa</a></button>
                    </th>
                </tr>
            <?php endforeach ?>
        </table>
        <div class="btn-list">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
        </div>
</div>