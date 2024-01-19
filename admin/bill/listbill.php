<div class="row">
    <div class="row frmtitle mb10">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" id="" placeholder="Nhập mã đơn hàng">
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
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                </tr>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $ttdh=get_ttdh($bill["bill_status"]);
                    $countsp= loadall_cart_count($bill["id"]);
                    $xoabill="index.php?act=xoabill&id=" . $id;
                ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $bill['id'] ?></td>
                    <td><?php echo $bill['bill_name'] ?></td>
                    <td><?php echo $countsp ?></td>
                    <td><?php echo $bill['total'] ?></td>
                    <td><?php echo $ttdh ?></td>
                    <td><?php echo $bill['ngaydathang'] ?></td>

                    <!-- <td><a href="<?php echo $suasp ?>"><input type="button" value="Sửa"></a>
                        <a href="<?php echo $xoabill ?>"><input type="button" value="xóa"></a>
                    </td> -->
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