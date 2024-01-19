<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><a href="<?php echo $suadm ?>"><input type="button" value="Sửa"></a>
                        <a href="<?php echo $xoadm ?>"><input type="button" value="xóa"></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả" onclick="checkAll()">
            <input type="button" value="Bỏ chọn tất cả" onclick="uncheckAll()">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>

<script>
function checkAll() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = true;
    });
}

//hàm sử dụng phương thức forEach để lặp qua từng phần tử trong mảng checkboxes. 
// Trong mỗi lần lặp, nó đặt thuộc tính checked của ô kiểm đó thành true, tức là chọn nó.

function uncheckAll() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
    });
}
</script>