<?php
require_once 'pdo.php';

// lấy tất cả sản phẩm 
function product_select_all()
{
    $sql = "SELECT * FROM product";
    $listsp = pdo_query($sql);
    return $listsp;
}
//

//thêm sp
function sanpham_insert($product_name, $sale, $img, $img1, $img2, $img3, $img4, $daban, $price, $price_del, $mota, $category_id)
{
    $sql = "INSERT INTO product (id, product_name, sale, img, img1, img2, img3, img4, daban, price, price_del, mota, category_id) 
    VALUES (NULL, '$product_name', '$sale', '$img', '$img1', '$img2', '$img3', '$img4', '$daban', '$price', '$price_del', '$mota', '$category_id')";
    pdo_execute($sql);
}
// edit
function product_select_by_id($id)
{
    $sql = "SELECT * FROM product WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
// update lại lên 
function product_update($id, $product_name, $sale, $img, $img1, $img2, $img3, $img4, $daban, $price, $price_del, $mota, $category_id)
{
    $sql = "UPDATE product SET product_name='$product_name',
                                sale='$sale', 
                                img='$img',
                                img1='$img1',
                                img2='$img2',
                                img3='$img3', 
                                img4='$img4', 
                                daban='$daban', 
                                price='$price', 
                                price_del='$price_del', 
                                mota='$mota', 
                                category_id='$category_id' WHERE id=$id";
    pdo_execute($sql);
}
// Xoa
function product_delete($id)
{
    $sql = "DELETE FROM product WHERE id=$id";
    pdo_execute($sql);
}

//search
function product_select_keyword($key, $category_id)
{
    $sql = "SELECT * FROM product Where 1";
    if ($key != "") {
        $sql .= " and product_name like '%" . $key . "%'";
    }
    if ($category_id > 0) {
        $sql .= " and category_id like '" . $category_id . "'";
    }
    $sql .= " order by id asc";
    // asc đầu xuống  
    //desc lấy từ dưới lên
    $listkey = pdo_query($sql);
    return $listkey;
}
// lấy sản phẩm cùng loại
function load_product_cungloai($id, $category_id)
{
    $sql = "SELECT * FROM product WHERE category_id = $category_id and id <> " . $id;
    $spct = pdo_query($sql);
    return $spct;
}
// teen danh mục 
function product_tendm($category_id)
{
    if ($category_id > 0) {
        $sql = "SELECT * FROM category  WHERE category_id =" . $category_id;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $category_name;
    } else {
        return "";
    }
}
// đém số lượng sản phẩm có trọng danh  mục 
function product_exist($category_id)
{
    $sql = "SELECT count(*) FROM product WHERE category_id=?";
    return pdo_query_value($sql, $category_id);
}
// lấy tóp 10 sản phẩm 
function hang_hoa_select_top10()
{
    $sql = " SELECT * FROM product WHERE 1 ORDER BY luotxem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

//Tăng lượt xem
function product_tang_luot_xem($id)
{
    $sql = "UPDATE product SET luotxem = luotxem + 1 WHERE id = ?";
    pdo_execute($sql, $id);
}
