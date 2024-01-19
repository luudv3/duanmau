<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb  ">
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        Email :
                        <input type="email" name="email" id="" value="<?= $email ?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập:
                        <input type="text" name="user" value="<?= $user ?>" id="">
                    </div>
                    <div class="row mb10">
                        Mật khẩu:
                        <input type="password" name="pass" value="<?= $pass ?>" id="">
                    </div>
                    <div class="row mb10">
                        Địa chỉ:
                        <input type="text" name="address" value="<?= $address ?>" id="">
                    </div>
                    <div class="row mb10">
                        Điện thoại:
                        <input type="text" name="tel" value="<?= $tel ?>" id="">
                    </div>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" value="Cập nhật" name=capnhat>
                    <input type="reset" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
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