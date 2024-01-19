<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Id</th>
                    <th>Nội dung bình luận</th>
                    <th>IdUser</th>
                    <th>IdPro</th>
                    <th>Ngày Bình Luận</th>
                    <th>Chức năng</th>
                    <th></th>
                </tr>


                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $id ?></td>
                    <td><?php echo $noidung ?></td>
                    <td><?php echo $iduser ?></td>
                    <td><?php echo $idpro ?></td>
                    <td><?php echo $ngaybinhluan ?></td>

                    <td><a href="<?php echo $xoabl ?>"><input type="button" value="xóa"></a>
                    </td>
                </tr>

                <?php
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"> <input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>