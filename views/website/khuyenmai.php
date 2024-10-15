<section class="box1">
    <ul>
        <li><a href="index-website.php">Trang chủ</a></li>
        <li><a href="#">/</a></li>
        <li><a href="#"><span>Khuyễn Mãi</span></a></li>
    </ul>
</section>
<main class="tong">
        <!---->
        <h3 class="h3-trangchu">Danh Sách Khuyến Mãi</h3>
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

        <!--text khuyến mãi -->
        <section class="text-khuyenmai" >
                <h2>CHƯƠNG TRÌNH ƯU ĐÃI, KHUYẾN MÃI, GIẢM GIÁ - JBAGY</h2>
                <span>Với mong muốn Thương hiệu quần áo thời trang nam nữ cao cấp JBAGY đến gần hơn Quý khách hàng, trong mỗi tháng JBAGY sẽ có những chương trình ưu đãi, khuyến mãi, giảm giá cực sốc một số items basic, hot items hoặc những sản phẩm được các bạn trẻ yêu thích nhất.</span>
                <br> 
                <br>
                <span>Hãy đăng ký trở thành hội viên của JBAGY ngay hôm nay, bạn không chỉ được tích điểm khi mua sắm online và offline, mà còn được tặng thêm các voucher giảm giá vào những ngày lễ hoặc sự kiện đặc biệt như sinh nhật. Các chương trình siêu giảm giá đến từ nhà JBAGY đều áp dụng giảm giá trực tiếp trên mức giá niêm yết của các sản phẩm dành cho cả nam và nữ.</span>
                <br>
                <br>
                <span>Tùy theo từng sự kiện trong tháng mà JBAGY sẽ đưa ra những chương trình khuyến mãi giảm giá cực mạnh như mua 1 tặng 1, đồng giá, tặng phụ kiện, sale off,... Ngoài ra, bạn cũng có thể săn các deal hot, mã khuyến mãi, voucher mua hàng khi mua sắm online dành cho Quý khách hàng trong các khung giờ vàng.</span>
                <br>
                <br>
                <span>Giờ đây, bạn có thể sở hữu những bộ quần áo nam nữ cực hot, được yêu thích nhất với chi phí cực ưu đãi tại hệ thống cửa hàng thời trang JBAGY trên toàn Việt Nam như thành phố Hồ Chí Minh, Hà Nội, Đà Nẵng, Bình Thuận, Nha Trang, Cà Mau,...</span>
                <br>
                <br>
                <span>Bên cạnh đó, nhằm hỗ trợ quá trình mua sắm của Quý khách hàng thuận tiện và nhanh chóng hơn, bạn có thể mua sắm online ngay trên website JBAGY để được freeship với đơn hàng chỉ từ 399k, áp dụng trên toàn quốc.</span>
                <h4>GOOD MOOD - GOOD DAY</h4>
        </section>
        <!---->
    </main>