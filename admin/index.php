    <?php
    include_once "../model/pdo.php";
    include_once "header.php";
    include_once "../model/danhmuc.php";
    include_once "../model/sanpham.php";
    include_once "../model/taikhoan.php";
    include_once "../model/binhluan.php";
    include_once "../model/cart.php";
    include_once "../model/thongke.php";

    // controller
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                if (isset($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công !";
                }
                include_once "danhmuc/add.php";
                break;
            case 'lisdm':
                $listdanhmuc = loadall_danhmuc();
                include_once "danhmuc/list.php";
                break;
            case 'xoadm':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include_once "danhmuc/list.php";
                break;
            case 'suadm':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $dm = loadone_danhmuc($_GET['id']);
                }

                include_once "danhmuc/update.php";
                break;
            case 'updatedm':
                if (isset($_POST['capnhat'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công !";
                }
                $listdanhmuc = loadall_danhmuc();
                include_once "danhmuc/list.php";
                break;




                //  contraller sản phẩm
            case 'addsp':
                if (isset($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    }
                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                    // $sql_insert="insert into flights values(null,$number,'$name_img',$toltal,'$Description',$airline)";
                    $thongbao = "Thêm thành công !";
                }
                $listdanhmuc = loadall_danhmuc();
                include_once "sanpham/add.php";
                break;
            case 'listsp':
                if (isset($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $iddm);
                include_once "sanpham/list.php";
                break;
            case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("", 0);
                include_once "sanpham/list.php";
                break;
            case 'suasp':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $sanpham = loadone_sanpham($_GET['id']);
                }

                $listdanhmuc = loadall_danhmuc();
                include_once "sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                    }
                    update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                    $thongbao = "Cập nhật thành công !";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include_once "sanpham/list.php";
                break;
            case 'dskh':

                $listtaikhoan = loadall_taikhoan();
                include_once "taikhoan/list.php";
                break;
            case 'xoatk':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadall_taikhoan("", 0);
                include_once "taikhoan/list.php";
                break;
            case "dsbl":
                $listbinhluan = loadall_binhluan(0);
                include_once "binhluan/list.php";
                break;
            case "xoabl":
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_binhluan("", 0);
                include_once "binhluan/list.php";
                break;
            case "thongke":
                $listthongke = loadall_thongke();
                include_once "thongke/list.php";
                break;
            case "bieudo":
                $listthongke = loadall_thongke();
                include_once "thongke/bieudo.php";
                break;


                // GIỎ HÀNG
            case "listbill":
                if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                    $kyw = $_POST['kyw'];
                } else {
                    $kyw = "";
                }
                $listbill = loadall_bill($kyw, 0);
                include_once "bill/listbill.php";
                break;

            case 'xoabill':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    delete_bill($_GET['id']);
                }
                $listbill = loadall_bill("", 0);
                include_once "bill/listbill.php";
                break;
        }
    } else {
        include_once "home.php";
    }

    include_once "footer.php";
