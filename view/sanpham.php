<div class="row mb ">
    <div class="boxtrai mr">
        <div class="boxtitle">SẢN PHẨM <strong><?php echo $tendm ?></strong></div>
        <div class="row boxcontent spct ">
            <?php
            $i = 0;

            foreach ($dssp as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;

                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="boxsp ' . $mr . '">
                    <a href="' . $linksp . '"><div class="row img"><img src="' . $hinh . '" alt=""></div></a>
                        <p>' . $price . '</p>
                        <a href="' . $linksp . '">' . $name . '</a>
                        </div>';
                $i += 1;
            }
            ?>
        </div>

    </div>
    <?php
    include_once "view/boxphai.php";
    ?>
</div>