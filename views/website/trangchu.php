



    <!-- BANNER-->
    <section class="banner">
        <img src="" alt="" class="load" width="100%">
        <div class="slide">
            <button onclick="truoc()" class="truoc"><i class="fa-solid fa-chevron-left"></i></button>
            <button onclick="sau()" class="sau"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </section>
<!-- <a href="../img/banner-1.jpg"></a> -->
    <!---->
    <main class="tong">
        <!---->
        <h3 class="h3-trangchu">Danh Sách Sản Phẩm</h3>
        <!--san pham1-->
        <section class="list-product">
            <!---->
            <?php foreach ($products as $pro) : ?>
            <div class="t-product">
                <a href="index-website.php?act=ctsp&id=<?= $pro['id'] ?>" >
                <div class="sp">
                    <div class="sp-img">
                        <img src="../views/img/<?=$pro['img']?>" alt="">
                    </div>
                    <div class="sp-name">
                        <h3><?=$pro['product_name']?></h3>
                    </div>
                    <div class="price">
                        <span><?=$pro['price']?></span>
                        <del><?=$pro['price_del']?></del>
                    </div>
                    <div class="dg-giam">
                        <div class="danhgia">
                            <span>5 <i class="fa-solid fa-star"></i></span><p>(26)</p>
                        </div>
                        <div class="giam">
                            <span><?=$pro['sale']?></span>
                        </div>
                    </div>
                </div>
                </a>
                <div class="them-sp">
                    <div class="nut-them-sp">
                        <a href="index-website.php?act=ctsp&id=<?= $pro['id'] ?>"><i class="fa-regular fa-eye"></i><p>Xem Chi Tiết</p></a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </section>
        <!-- BANNER-3 -->
        <section class="banner-1">
            <img src="../views/img/chinh-sach.png" alt="" width="100%">
        </section>
        <!--TIN TUC-->
        <!-- <section class="tt">
            <div class="tt-text">
                <div class="tt-n">
                    <h1>LUÔN CẬP NHẬT XU HƯỚNG THỜI TRANG</h1>
                </div>
                <div class="tt-gt">
                    <span>Tổng hợp các xu hướng, tin tức và phong cách thời trang hiện đại. Kinh nghiệm, lời
                        khuyên hữu ích về cách phối đồ, mẹo vặt và kiến thức về thời trang.</span>
                </div>
                <div class="tt-link">
                    <a href="#">Tin tức thời trang <i class="fa-solid fa-location-arrow"></i></a>
                </div>
            </div>
            <div class="tt-img">
                <a href="#">
                    <img src="../views/img/qc.jpg" alt="">
                    <p>#6 cách xắn tay áo sơ mi nam chuẩn đẹp soái ca, gọn gàng</p>
                </a>
            </div>
        </section> -->
        <!---->
        <section class="banner-2">
            <img src="../views/img/banner-4.jpg" alt="" width="100%">
        </section>
    </main>
    <!---->
