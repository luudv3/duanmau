<div class="row">
    <div class="row frmtitle">
        <H1>DANH SÁCH TÀI KHOẢN</H1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>TÊN ĐĂNG NHÂP </th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>

                    <th></th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoatk&id=".$id;
                    ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $id ?></td>
                    <td><?php echo $user ?></td>
                    <td><?php echo $pass ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $address ?></td>
                    <td><?php echo $tel ?></td>
                    <td><?php echo $role ?></td>


                    <td><a href="<?php echo $suatk ?>"><input type="button" value="Sửa"></a>
                        <a href="<?php echo $xoatk ?>"><input type="button" value="xóa"></a>
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