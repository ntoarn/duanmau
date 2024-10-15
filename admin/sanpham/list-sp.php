<div class="list-sp">
    <div class="text-sp">
        <h2>Danh sách Sản Phẩm</h2>
    </div>

    <form action="" method="post">
        <div class="search">
            <input type="text" name="key" placeholder="Search product">
            <select name="category_id">
                <option value="0" selected>Tất cả</option>
                <?php foreach ($listall as $list): ?>
                    <option value="<?= $list['category_id'] ?>"><?= $list['category_name'] ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" name="search-list" value="search" style="margin-left: 10px;">
        </div>
    </form>

    <div style="font-weight: 500; font-size: 20px; color: black;">
        <?php if (isset($message) && !empty($message)) echo $message; ?>
    </div>

    <table border="1" class="table-sp">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>NAME</th>
                <th>SALE</th>
                <th>IMG</th>
                <th>ĐÃ BÁN</th>
                <th>PRICE</th>
                <th>PRICE_DEL</th>
                <th>MÔ TẢ</th>
                <th>LƯỢT XEM</th>
                <!-- <th>CATEGORY_ID</th> -->
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listkey as $pro): ?>
                <tr>
                    <td><input type="checkbox"></td>
                    <td><?= $pro['id'] ?></td>
                    <td><?= $pro['product_name'] ?></td>
                    <td><?= $pro['sale'] ?></td>
                    <td><img src="../views/img/<?= $pro['img'] ?>" alt="" width="100" height="100"></td>
                    <td><?= $pro['daban'] ?></td>
                    <td><?= $pro['price'] ?></td>
                    <td><?= $pro['price_del'] ?></td>
                    <td><?= $pro['mota'] ?></td>
                    <td><?= $pro['luotxem'] ?></td>
                    <!-- <td> -->
                        <?php 
                        // switch ($pro['category_id']) {
                        //     case 1: echo "Áo Sơ Mi"; break;
                        //     case 2: echo "ÁO Thun"; break;
                        //     case 3: echo "ÁO Polo"; break;
                        //     case 4: echo "Quần Âu"; break;
                        //     case 5: echo "Quần jean"; break;
                        //     case 6: echo "Quần Kaki"; break;
                        //     default: echo "Quần Short"; break;
                        // }
                        // ?>
                    </td>
                    <td class="sua-xoa">
                        <button><a href="index.php?act=editsp&id=<?= $pro['id'] ?>">Sửa</a></button>
                        <button><a href="index.php?act=deletesp&id=<?= $pro['id'] ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="btn-list">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
    </div>
</div>
