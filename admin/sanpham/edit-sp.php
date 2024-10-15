<?php

if (is_array($sanpham)) {
  extract($sanpham);
}
?>

<div class="form">
  <div class="text-2">
    <h1>Sửa SẢN PHẨM</h1>
  </div>
  <form class="form-add" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
    <div class="name">
      Tên sản phẩm: <br />
      <input type="text" name="product_name" id="" value="<?php if(isset($product_name)&&($product_name!="")) echo$product_name ?>">
    </div>
    <br />
    <div class="dabam">
      Đã bán: <br />
      <input type="text" name="daban" id="" value="<?php if(isset($daban)&&($daban!="")) echo$daban ?>">
    </div>
    <br />
    <div class="price">
      Price: <br />
      <input type="text" name="price" id="" value="<?php if(isset($price)&&($price!="")) echo$price ?>">
    </div>
    <br />
    <div class="price-del">
      Price_del: <br />
      <input type="text" name="price_del" id="" value="<?php if(isset($price_del)&&($price_del!="")) echo$price_del ?>">
    </div>
    <br />
    <div class="img">
      Img: <br />
      <input type="file" name="img" id="" >
      <input type="hidden" name="img" id="" value="<?= $img ?>">
      <img src="../views/img/<?= $img?>" alt="" width="100px">
    </div>
    <br />
    <div class="img">
      Img-1: <br />
      <input type="file" name="img1" id="" >
      <input type="hidden" name="img1" id="" value="<?= $img1 ?>">
      <img src="../views/img/<?= $img1?>" alt="" width="100px">
    </div>
    <br />
    <div class="img">
      Img-2: <br />
      <input type="file" name="img2" id="" />
      <input type="hidden" name="img2" id="" value="<?= $img2 ?>">
      <img src="../views/img/<?= $img2?>" alt="" width="100px">
    </div>
    <br />
    <div class="img">
      Img-3: <br />
      <input type="file" name="img3" id="" />
      <input type="hidden" name="img3" id="" value="<?= $img3 ?>">
      <img src="../views/img/<?= $img3?>" alt="" width="100px">
    </div>
    <br />
    <div class="img">
      Img-4: <br />
      <input type="file" name="img4" id="" value="<?= $img4 ?>" >
      <input type="hidden" name="img4" id="" value="<?= $img4 ?>">
      <img src="../views/img/<?= $img4?>" alt="" width="100px">
    </div>
    <br />
    <div class="mota">
      Mô Tả: <br />
      <input type="text" name="mota" id="" value="<?php if(isset($mota)&&($mota!="")) echo$mota ?>">
    </div>
    <br />
    <div class="sale" >
      Sale: <br />
      <input type="text" name="sale" id="" value="<?php if(isset($sale)&&($sale!="")) echo$sale ?>">
    </div>
    <br />
    <div class="danhmuc">
      Danh mục: <br />
      <select name="category_id" id="">
        <option value="0" selected>ALL</option>
        <?php
          foreach ($listall as $list) {
            extract($list);
            if ($sanpham['category_id'] == $category_id) {
              echo ' <option value="'.$category_id.'" selected>'.$category_name.'</option>';
            }else{
              echo ' <option value="'.$category_id.'">'.$category_name.'</option>';
          }
        }
        ?>
      </select>
    </div>
    <br />
    <div class="btn">
    <input type="hidden" name="id" id="" value="<?php if(isset($id)&&($id>0)) echo $id ?>" >
      <input type="submit" name="capnhapsp" id="" value="Cập nhập" >
      <button><a href="index.php?act=listsp">Danh sách sản phẩm</a></button>
    </div>
  </form>
</div>
</div>