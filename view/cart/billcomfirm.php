<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb">
            <div class="row frmtitle ">
                <h1>CẢM ƠN</h1>
            </div>
            <div style="text-align: center;" class="row boxcontent3 mb">
                <h1>Cảm ơn quý khách đã đặt hàng</h1>
            </div>
        </div>

        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>

        <div class="row mb">
            <div class="row frmtitle ">
                <h1>THÔNG TIN ĐƠN HÀNG</h1>
            </div>
            <div class="row boxcontent3 mb">
                <li> Mã đơn hàng : DAM - <?php echo $bill['id']; ?></li>
                <li> Ngày đặt hàng : <?php echo $bill['ngaydathang']; ?></li>
                <li> Tổng đơn hàng : <?php echo $bill['total']; ?></li>
                <li> Phương thức thanh toán : <?php echo $bill['bill_pttt']; ?></li>
            </div>
        </div>
        <div class="row mb">
            <div class="row frmtitle ">
                <h1>THÔNG TIN ĐẶT HÀNG</h1>
            </div>
            <div class="row boxcontent mb">
                <table>
                    <tr>
                        <td style="padding-right: 30px;">Người đặt hàng :</td>
                        <td><?php echo $bill['bill_name']; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-right: 20px;">Địa chỉ :</td>
                        <td><?php echo $bill['bill_address']; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-right: 20px;">Email :</td>
                        <td><?php echo $bill['bill_email']; ?></td>
                    </tr>
                    <tr>
                        <td style="padding-right: 20px;">Điện thoại :</td>
                        <td><?php echo $bill['bill_tel']; ?></td>
                    </tr>
                    </tr>
                </table>
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
            <a class="continue-button" href="index.php">Tiếp tục mua </a>
        </div>
    </div>
    <?php
    include_once "view/boxphai.php";
    ?>