<div class="row mb">
    <div class="boxtrai mr ">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="row mb">
                <div class="row frmtitle ">
                    <h1>THÔNG TIN ĐẶT HÀNG</h1>
                </div>
                <div class="row boxcontent mb">
                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" id="" value="<?php echo $name ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" id="" value="<?php echo $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" id="" value="<?php echo $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="tel" id="" value="<?php echo $tel ?>"></td>
                        </tr>
                    </table>
                </div>
                <div class="row mb ">
                    <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                    <div class="row boxcontent3">
                        <table style="height: 20px;">
                            <tr>
                                <td><input type="radio" name="pttt" id="" checked>Trả tiền khi nhận hàng</td>
                                <td><input type="radio" name="pttt" id="">Chuyển khoản</td>
                                <td><input type="radio" name="pttt" id="">Thanh toán online</td>

                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mb ">
                    <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                    <div class="row boxcontent">
                        <div class="row mb10 frmdsloai">
                            <table>

                                <?php
                                include_once "model/cart.php";
                                viewcart(0);
                                ?>
                            </table>
                        </div>

                    </div>

                </div>

            </div>
            <div class="row mb10">
                <!-- Các trường và nút submit khác -->
                <input type="submit" name="dongydathang" value="Đồng ý đặt hàng">

            </div>
        </form>
    </div>
    <?php
    include_once "view/boxphai.php";
    ?>