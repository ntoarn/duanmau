<?php
// add binh luận 
function binh_luan_insert($noidung, $name_user, $idsp, $timebl)
{
    $sql = "INSERT INTO `binhluan` (`id`, `noidung`, `name_user`, `idsp`, `timebl`) VALUES (NULL, '$noidung', '$name_user', '$idsp', '$timebl')";
    pdo_execute($sql);
}
function binhluan_select_all()
{
    $sql = "SELECT * FROM binhluan";
    $listbl = pdo_query($sql);
    return $listbl;
}

function binh_luan_select_all($idsp)
{
    $sql = "SELECT * FROM binhluan where 1";
    if ($idsp > 0) {
        $sql .= " AND idsp='" . $idsp . "'";
        $sql .= "  ORDER BY id DESC";
    }
    return pdo_query($sql);
}

//xoa
function binhluan_delete($id)
{
    $sql = "DELETE FROM binhluan WHERE id=$id";
    pdo_execute($sql);
}
