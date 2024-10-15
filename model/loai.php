<?php
//hien thi category
function loadall_category(){
    $sql = "SELECT * FROM category";
    $dm = pdo_query($sql);
    return $dm;
}
//xoa category
function loai_delete($category_id){
    $sql = "DELETE FROM category WHERE category_id=$category_id";
    pdo_execute($sql);
}
// add category
function loai_add($category_name){
    $sql = "INSERT INTO `category` (`category_id`, `category_name`) VALUES (NULL,'$category_name')";
    pdo_execute($sql);
}
// sửa
function loai_select_by_id($category_id){
    $sql = "SELECT * FROM category WHERE category_id=?";
    return pdo_query_one($sql, $category_id);
}
// update lại
function loai_update($category_id, $category_name){
    $sql = "UPDATE category SET category_name=? WHERE category_id=?";
    pdo_execute($sql, $category_name, $category_id);
}
