<?php

function loadall_thongke()
{
    $sql = "SELECT category.category_id as category_id, category.category_name as category_name, count(product.id) as countsp, min(product.price_del) as minprice, max(product.price_del) as maxprice, avg(product.price_del) as avgprice ";
    $sql .= " from product left join category ON category.category_id = product.category_id";
    $sql .= "  group by category.category_id order by category.category_id asc";
    $listtk = pdo_query($sql);
    return $listtk;
}
