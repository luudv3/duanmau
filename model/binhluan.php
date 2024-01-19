<?php
function loadall_binhluan($idpro)
{
    $sql = "SELECT * FROM binhluan WHERE 1";

    if ($idpro > 0) {
        $sql .= " AND idpro='" . $idpro . "'";
    }
    $sql .= " ORDER BY id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}
function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan)
{
    $ngaybinhluan = date('Y/d/m');
    $sql = "insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}

// để bỏ dàng buộc khóa ngoại khi xóa sp nó sẽ xóa tất cả bình luận rồi đc gọi vào file xóa sp  
function delete_binhluan_by_idpro($idpro)
{
    $sql = "delete from binhluan where idpro=" . $idpro;
    pdo_execute($sql);
}