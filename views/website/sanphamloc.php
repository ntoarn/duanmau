<section class="box1">
    <ul>
        <li><a href="index-website.php">Trang chủ</a></li>
        <li><a href="#">/</a></li>
        <li><a href="#"><span>Sản phẩm</span></a></li>
    </ul>
</section>
<!--    -->
<main class="main-sp">
    <h1 class="tieude-sp">SẢN PHẨM</h1>
    <section class="search-sp">
        <form class="form-sanpham" action="index-website.php?act=locsanpham" method="post">
            <div class="search-icon">
                <input type="search" name="key" placeholder="Hãy bắt đầy với 'Quần Jean' xem sao...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>

            </div>
        </form>
    </section>
    <section class="box2-sp">
        <!--MUNU-->
        <div class="box2-menu-sp">
            <div class="loc-sp">
                <div class="loc-td-sp">
                    <a href="index-website.php?act=shop">
                        <h3>DANH MỤC</h3>
                    </a>
                </div>
                <nav>
                    <!-- class="menu-price" -->
                    <ul>
                        <?php foreach ($listall  as $list) : ?>
                            <li>
                                <a href="index-website.php?act=locsanpham&category_id=<?= $list['category_id'] ?>">
                                    <?= $list['category_name'] ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </nav>
            </div>
            <div class="top10-sp">
                <div class="top10-text">
                    <h3>TOP 10 SẢN PHẨM</h3>
                </div>
                <?php foreach ($dstop10 as $list) : ?>
                    <div class="top10-img">
                        <img src="../views/img/<?= $list['img'] ?>" alt="">
                        <a href="index-website.php?act=ctsp&id=<?= $list['id'] ?>"> <?= $list['product_name'] ?></a>
                    </div>
                    <hr>
                <?php endforeach ?>
            </div>
            <div class="sale-sp">
                <img src="img/sale_trangSP.webp" alt="" width="250px">
            </div>
        </div>
        <div class="list-product-sp">
            <!---->
            <?php foreach ($products as $pro) : ?>
                <div class="t-product-sp">
                    <a href="index-website.php?act=ctsp&id=<?= $pro['id'] ?>">
                        <div class="sp-sp">
                            <div class="sp-img-sp">
                                <img src="../views/img/<?= $pro['img'] ?>" alt="">
                            </div>
                            <div class="sp-name-sp">
                                <h3><?= $pro['product_name'] ?></h3>
                            </div>
                            <div class="price-sp">
                                <span><?= $pro['price'] ?></span>
                                <del><?= $pro['price_del'] ?></del>
                            </div>
                            <div class="dg-giam-sp">
                                <div class="danhgia-sp">
                                    <span>5 <i class="fa-solid fa-star"></i></span>
                                    <p>(26)</p>
                                </div>
                                <div class="giam-sp">
                                    <span><?= $pro['sale'] ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="them-sp-sp">
                        <div class="nut-them-sp-sp">
                            <a href="index-website.php?act=ctsp&id=<?= $pro['id'] ?>"><i class="fa-regular fa-eye"></i>
                                <p>Xem Chi Tiết</p>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</main>