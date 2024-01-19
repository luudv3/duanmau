<style>
    td {
        padding: 0 20px;
    }
</style>
<div class="row mb ">
    <div class="boxtrai mr">
        <?php extract($onesp); ?>
        <div class="row mb spct ">
            <div class="boxtitle">
                <?php echo $name; ?>
            </div>
            <div class="row boxcontent">
                <?php
                $img = $img_path . $img;
                echo "<img src='$img' width='300'>";
                echo "<p>$mota</p>";
                ?>

            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $id ?>
                });

            });
        </script>
        <div class="row mb" id="binhluan">
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class=" row boxcontent  ">

                <table>
                    <?php foreach ($binhluan as $value) : ?>
                        <tr>
                            <td><?php echo $value['noidung'] ?></td>
                            <td><?php echo $value['user'] ?></td>
                            <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <h1>Nguyễn Thanh Tùng</h1>
            </div>
            <div class="boxsearch">
                <form action="index.php?act=sanphamct&idsp=<?= $id ?>" method="POST">
                    <input type="hidden" name="idpro" value="<?= $id ?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div>

        </div>

        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php foreach ($sp_cung_loai as $sp_cung_loai) :
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '
                <li>
                    <a href="' . $linksp . '">
                        ' . $name . '
                    </a>
                </li>';
                endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    include_once "view/boxphai.php";
    ?>

</div>