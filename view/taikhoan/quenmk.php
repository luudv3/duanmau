<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb  ">
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row mb10">
                        Email :
                        <input type="email" name="email" id="">
                    </div>

                    <input type="submit" value="Gửi" name="guiemail">
                    <input type="reset" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                    <?php

                    // Cách 1 : hiển thị mật khẩu luôn
                    // if (isset($thongbao) && ($thongbao != "")) {
                    //     echo $thongbao;
                    // }


                    // Cách 2 : gửi email
                    if (isset($sendMailMess) && $sendMailMess != '') {
                        echo $sendMailMess;
                    }
                    ?>
                </h2>
            </div>
        </div>

    </div>
    <?php
    include_once "view/boxphai.php";
    ?>

</div>