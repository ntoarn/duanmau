    <div class="text-dm">
        <h2>Danh sách Danh Mục</h2>
    </div>
    <div class="list-dm">
        <div class="table-dm">
            <div class="id-name">
                <div class="id-list">ID</div>
                <div class="ten-dm">NAME</div>
            </div>
            <br>
            <table border="1px">
                <?php foreach ($category as $cate) : ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?= $cate['category_id'] ?></td>
                        <td><?= $cate['category_name'] ?></td>
                        <td>

                            <button><a href="index.php?act=editdm&category_id=<?= $cate['category_id'] ?>">Sửa</a></button>
                            <button> <a href="index.php?act=deletedm&category_id=<?= $cate['category_id'] ?>">Xóa</a></button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            <br>
            <div style="font-weight: 500; font-size: 20px; ; color: black;">
                <?php
                if (isset($message) && ($message != ""))
                    echo $message;
                ?>
            </div>
        </div>
        <div class="btn-list">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>