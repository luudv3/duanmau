<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "view/header.php";
include "global.php";
include "model/cart.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
           include_once "view/sanpham.php";

            break;
        case "sanphamct":

            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $onesp = loadone_sanpham($_GET['idsp']);

                extract($onesp);
                $sp_cung_loai = loadone_sanpham_cungloai($_GET['idsp'], $iddm);

               include_once "view/sanphamct.php";
            } else {
               include_once "view/home.php";
            }
            break;

        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng";
            }

           include_once "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    $thongbao = "Đã đăng nhập thành công !";
                    header('location:index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại tài khoản ";
                }
            }

           include_once "view/taikhoan/dangky.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];

                update_taikhoan($id, $user, $pass, $email, $address, $tel);

                // cập nhật lại session user mới 
                $_SESSION['user'] = checkuser($user, $pass);

                header('location:index.php?act=edit_taikhoan');
            }

           include_once "view/taikhoan/edit_taikhoan.php";
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && $_POST['guiemail']) {
                $email = $_POST['email'];

                // $checkemail = checkemail($email);
                // cách 1: hiển thị mật khẩu ra
                // if (is_array($checkemail)) {
                //     $thongbao = "Mật khẩu của bạn là : " . $checkemail['pass'];
                // } else {
                //     $thongbao = "Email này không tồn tại ";
                // }


                 // cách 2: Gửi thông báo về email
                 $sendMailMess = sendMail($email);
                 
            }

           include_once "view/taikhoan/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            header('location:index.php');
           include_once "view/gioithieu.php";
            break;


            // Giỏ hàng 

        case 'addtocart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }

           include_once "view/cart/viewcart.php";
            break;

        case 'delcart':
            if (isset($_GET['idcart']) && $_GET['idcart'] > 0) {
                $id = $_GET['idcart'];
                array_splice($_SESSION['mycart'], $id - 1, 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=viewcart');
            break;
            // ...

            //Cách xóa khác : 
            //  case 'delcart':
            //     if (isset($_GET['idcart'])) {
            //         unset($_SESSION['mycart'][$_GET['idcart']]);
            //     } else {
            //         $_SESSION['mycart'] = [];
            //     }
            //     header('Location: index.php?act=viewcart');
            //     break;



        case 'xoahet':
            $_SESSION['mycart'] = []; // Xóa hết sản phẩm trong giỏ hàng
           include_once "view/cart/viewcart.php";
            break;
        case 'viewcart':
           include_once "view/cart/viewcart.php";
            break;
        case 'bill':
           include_once "view/cart/bill.php";
            break;
         case 'billcomfirm':
                if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $pttt = $_POST['pttt'];
                    $tel = $_POST['tel'];
                    $ngaydathang = date('h:i:sa m/d/Y');
                    $tongdonhang = tongdonhang();
            
                    $idbill = insert_bill($name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);
            
                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                    }
                    $_SESSION['cart']=[];
                    
                }
                $bill = loadone_bill($idbill);
                $billct = loadone_cart($idbill);
               include_once "view/cart/billcomfirm.php";
                break;

                
                


case 'lienhe':
include_once "view/lienhe.php";
break;
case 'gioithieu':
include_once "view/gioithieu.php";
break;

default:
include_once "view/home.php";
include_once "view/boxphai.php";
break;
}
} else {
include_once "view/home.php";
include_once "view/boxphai.php";
}

include "view/footer.php";