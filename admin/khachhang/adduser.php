<div class="form">
    <div class="text-2">
        <h1>THÊM MỚI USER</h1>
    </div>
    <form class="form-add" action="index.php?act=adduser" method="post">
        <div class="name">
            Tên sản User: <br />
            <input type="text" name="user_name" id="" required/>
        </div>
        <br />
        <div class="dabam">
            email: <br />
            <input type="text" name="email" id="" required/>
        </div>
        <br />
        <div class="price">
            Số điện thoại: <br />
            <input type="number" name="sdt" id="" required/>
        </div>
        <br />
        <div class="price-del">
            Pass: <br />
            <input type="text" name="pass" id="" required/>
        </div>
        <br />
        <div class="price-del">
            Địa chỉ: <br />
            <input type="text" name="diachi" id="" required/>
        </div>
        <br>
        <div class="price-del">
            Role: <br />
            <input type="text" name="role" id="" required/>
        </div>
        <br />
        <div class="btn">
            <input type="submit" name="themmoiuser" id="" value="Thêm mới">
            <button><a href="index.php?act=listuser">Danh sách sản phẩm</a></button>
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