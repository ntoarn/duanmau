<div class="form">
    <div class="text-2">
        <h1>THÊM MỚI LOẠI HÀNG</h1>
    </div>
    <div class="form-content">
        <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
            <div class="id-add">
                ID: <br>
                <input type="text" name="category_id" disabled>
            </div>
            <div class="name">
                Tên loại:<br>
                <input type="text" name="category_name" required>
            </div>
            <div class="btn">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <div style="font-weight: 500; font-size: 20px; ; color: black;">
                <?php
            if (isset($message) && ($message != ""))
                echo $message;
            ?>
            </div>
        </form>
    </div>
</div>
</div>