<!--    -->
<section class="box1">

    <?php if ($products['id'] == $id) : ?>
    <ul>
        <li><a href="index-website.php">Trang chủ</a></li>
        <li><a href="#">/</a></li>
        <li><a href="#">Sản phẩm</a></li>
        <li><a href="#">/</a></li>
        <li><a href="#"><span><?= $products['product_name'] ?></span></a></li>
    </ul>
    <?php endif ?>

</section>

<!-- -->
<main class="main-ctsp">
    <section class="ctsp">
        <!-- -->
        <?php if ($products['id'] == $id) : ?>
        <div class="ctsp-img">
            <div class="img-1-ctsp">
                <img class="hover-ctsp" src="../views/img/<?= $products['img'] ?>" alt="">
                <div class="giamgia-ctsp">
                    <span><?= $products['sale'] ?></span>
                </div>
            </div>
            <div class="img-2-ctsp">
                <img src="../views/img/<?= $products['img1'] ?>" alt="">
                <img src="../views/img/<?= $products['img2'] ?>" alt="">
                <img src="../views/img/<?= $products['img3'] ?>" alt="">
                <img src="../views/img/<?= $products['img4'] ?>" alt="">
            </div>
        </div>
        <!-- -->
        <div class="text-nut">
            <div class="ctsp-tt">
                <h2><?= $products['product_name'] ?></h2>
                <div class="sp-ban">
                    <span><?= $products['daban'] ?></span>
                </div>
                <div class="price">
                    <div class="gia-1"><span><?= $products['price'] ?></span></div>
                    <div class="gia-2"><del><?= $products['price_del'] ?></del></div>
                </div>
            </div>
            <!-- -->
            <!-- <div class="ctsp-mau">
                <div class="text">
                    <h3>Màu sắc:</h3>
                </div>
                <div class="chon-mau">
                    <div class="mau-1">
                        <span>Màu Trắng</span>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="mau-1">
                        <span>Màu Xanh</span>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="mau-1">
                        <span>Màu Đen</span>
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="mau-1">
                        <span>Màu Ghi</span>
                        <input type="checkbox" name="" id="">
                    </div>
                </div>
            </div> -->
            <!-- -->
            <div class="size">
                <h3>Chọn loại:</h3>
                <div class="size-t">
                    <button class="size-con">Bó</button>
                    <button class="size-con">500G</button>
                    <button class="size-con">1KG</button>
                    <button class="size-con">3KG</button>
                    <button class="size-con">5KG</button>
                    <button class="size-con">7XL</button>
                </div>
            </div>
            <!--  -->
            <div class="sl-sp-ctsp">
                <h3>Số lượng:</h3>
                <div class="tong-nut-ctsp">
                    <div class="nut-sl-ctsp">
                        <button class="minus-btn" onclick="minus()">
                            <i class="fa-solid fa-minus"></i>
                        </button>
                        <input type="text" name="amount" id="amount" value="1">
                        <button class="plus-btn" onclick="plus()">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                    <div class="nut-them-ctsp">
                        <a href="#"><button>THÊM VÀO GIỎ HÀNG</button></a>
                    </div>
                    <div class="nut-mua-ctsp">
                        <a href="#"><button>MUA NGAY</button></a>
                    </div>
                </div>
            </div>
            <!---->
            <hr>
            <!---->
            <div class="magiam">
                <h3>Mã giảm giá:</h3>
                <div class="tong-ma">
                    <div class="ma-g">
                        <span>JBAGY10</span>
                    </div>
                    <div class="ma-g">
                        <span>JBAGY20</span>
                    </div>
                    <div class="ma-g">
                        <span>JBAGY30</span>
                    </div>
                </div>
            </div>
            <!---->
            <hr>
            <!---->
            <div class="chinhsach">
                <h3>Chính sách bán hàng: </h3>
                <div class="tong-cs">
                    <div class="cs-img">
                        <img src="../views/img/shipped.png" alt="">
                        <span>Freeship Đơn Từ 200.000đ</span>
                    </div>
                    <div class="cs-img">
                        <img src="../views/img/exchange-1.png" alt="">
                        <span>Đổi Trả Trong 30 Ngày</span>
                    </div>
                    <div class="cs-img">
                        <img src="../views/img/inspection.png" alt="">
                        <span>Đồng Kiểm Khi Nhận Hàng</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>

    </section>

    <!---->
    <section class="ttsp-comment">
        <!---->

        <?php if ($products['id'] == $id) : ?>
        <div class="ttsp">
            <h3>Thông tin sản phẩm!</h3>
            <br>
            <span>
                <?= $products['mota'] ?>
            </span>
        </div>
        <?php endif ?>
        <!---->
    </section>
    <!-- Bình luận -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#binhluannew").load("../views/website/form-binhluan.php", {
            idsp: <?= $id ?>
        });
    });
    </script>
    <div class="binhluannew" id="binhluannew"> </div>
    <!--Sản Phẩm -->
    <h1 class="h1">Sản phẩm liên quan</h1>
    <section class="list-product">
        <!---->
        <?php foreach ($productscl as $pro) : ?>
        <div class="t-product">
            <a href="index-website.php?act=ctsp&id=<?= $pro['id'] ?>">
                <div class="sp">
                    <div class="sp-img">
                        <img src="../views/img/<?= $pro['img'] ?>" alt="">
                    </div>
                    <div class="sp-name">
                        <h3><?= $pro['product_name'] ?></h3>
                    </div>
                    <div class="price">
                        <span><?= $pro['price'] ?></span>
                        <del><?= $pro['price_del'] ?></del>
                    </div>
                    <div class="dg-giam-ctsp">
                        <div class="danhgia-ctsp">
                            <span>5 <i class="fa-solid fa-star"></i></span>
                            <p>(26)</p>
                        </div>
                        <div class="giam-ctsp">
                            <span><?= $pro['sale'] ?></span>
                        </div>
                    </div>
                </div>
            </a>
            <div class="them-sp-ctsp">
                <div class="nut-them-sp-ctsp">
                    <a href="index-website.php?act=ctsp&id=<?= $pro['id'] ?>"><i class="fa-regular fa-eye"></i>
                        <p>Xem Chi Tiết</p>
                    </a>
                    </button>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </section>
</main>