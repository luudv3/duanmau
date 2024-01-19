<?php

if (isset($_SESSION['user'])) {

?>
    <div class="row mb">
        <div class="boxtrai mr">
            <div class="row cart">
                <div class="row frmtitle mb10">
                    <h1>GIỎ HÀNG</h1>
                </div>
                <div class="row frmcontent">
                    <div class="row mb10 frmdsloai">
                        <table>

                            <?php
                            include_once "model/cart.php";
                            viewcart(1);
                            ?>


                        </table>
                    </div>

                    <div class="row mb10">
                        <a href="index.php?act=bill"><input type="submit" value="Đồng ý đặt hàng"></a>
                        <a href="index.php?act=xoahet"><input type="button" value="Xóa khỏi giỏ hàng"></a>
                    </div>
                </div>
            </div>
            <a class="continue-button" href="index.php">Tiếp tục mua </a>
        </div>
        <?php
        include_once "view/boxphai.php";
        ?>
    </div>
<?php
} else {
    include_once "view/taikhoan/dangky.php";
}
?>