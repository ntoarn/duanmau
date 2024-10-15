<div class="form">
  <div class="text-2">
    <h1>THÊM MỚI SẢN PHẨM</h1>
  </div>
  <form class="form-add" action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    <div class="name">
      Tên sản phẩm: <br />
      <input type="text" name="product_name" id="" required />
    </div>
    <br />
    <div class="dabam">
      Đã bán: <br />
      <input type="text" name="daban" id="" required/>
    </div>
    <br />
    <div class="price">
      Price: <br />
      <input type="text" name="price" id="" required/>
    </div>
    <br />
    <div class="price-del">
      Price_del: <br />
      <input type="text" name="price_del" id="" required/>
    </div>
    <br />
    <div class="img">
      Img: <br />
      <input type="file" name="img" id="" required/>
    </div>
    <br />
    <div class="img">
      Img-1: <br />
      <input type="file" name="img1" id="" required/>
    </div>
    <br />
    <div class="img">
      Img-2: <br />
      <input type="file" name="img2" id="" required/>
    </div>
    <br />
    <div class="img">
      Img-3: <br />
      <input type="file" name="img3" id="" required/>
    </div>
    <br />
    <div class="img">
      Img-4: <br />
      <input type="file" name="img4" id="" required/>
    </div>
    <br />
    <div class="mota">
      Mô Tả: <br />
      <input type="text" name="mota" id="" required/>
    </div>
    <br />
    <div class="sale">
      Sale: <br />
      <input type="text" name="sale" id="" required/>
    </div>
    <br />
    <div class="danhmuc">
      Danh mục: <br />
      <select name="category_id" id="">
        <?php
        foreach ($listall as $list) {
          extract($list);

          echo ' <option value="' . $category_id . '">' . $category_name . '</option>';
        }
        ?>
      </select>
    </div>
    <br />
    <div class="btn">
      <input type="submit" name="themmoisp" id="" value="Thêm mới">
      <button><a href="index.php?act=listsp">Danh sách sản phẩm</a></button>
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