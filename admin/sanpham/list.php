<div class="row">
    <div class="row frmtitle mb10">
        <H1>DANH SÁCH SẢN PHẨM</H1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw" id="">
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
            ?>

            <option value="<?php echo $id ?>"><?php echo $name ?></option>
            <?php
            }
            ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">

            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "No photo";
                    }
                ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $hinh ?></td>
                    <td><?php echo $price ?></td>
                    <td><?php echo $luotxem ?></td>

                    <td><a href="<?php echo $suasp ?>"><input type="button" value="Sửa"></a>
                        <a href="<?php echo $xoasp ?>"><input type="button" value="xóa"></a>
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
            <a href="index.php?act=addsp"> <input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>