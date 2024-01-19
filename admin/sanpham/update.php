<?php
if (is_array($sanpham)) {
    extract($sanpham);
}

$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "No photo";
}
?>
<div class="row">
    <div class="row frmtitle">
        <H1>Cập nhật LOẠI HÀNG HÓA</H1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id) $s="selected";else $s="";
                        echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                    }
                    ?>
                </select>
            </div>
            <?php
            if (is_array($sanpham)) {
                extract($sanpham);
            }
           
            ?>

            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?php echo $name ?>" id="" required>
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp" value="<?php echo $price ?>" id="" required>
            </div>
            <div class="row mb10">
                Hình <br>
                <input type="file" name="hinh" id="">
                <?php echo $hinh ?>
            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="mota" id="" cols="30" rows="10" value="<?php echo $mota ?>"></textarea>
            </div>

            <div class="row mb20">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=lissp"> <input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao)) {
                echo $thongbao;
            }



            ?>
        </form>
    </div>
</div>