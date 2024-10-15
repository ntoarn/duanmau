<div class="list-sp">
    <div class="text-sp">
        <h2>Thống kế</h2>
    </div>
    <br>
    <table border="1px" class="table-sp">
        <tr>
            <th>Mã Danh Mục</th>
            <th>Tên Danh Mục</th>
            <th>Số Lượng</th>
            <th>Giá Cao Nhất</th>
            <th>Giá Trung Bình</th>
            <th>Giá Thấp Nhất</th>
        </tr>
        <?php foreach ($listtk as $tk) : ?>
            <tr>
                <th><?= $tk['category_id'] ?></th>
                <th><?= $tk['category_name'] ?></th>
                <th><?= $tk['countsp'] ?></th>
                <th><?= $tk['maxprice'] ?></th>
                <th><?= $tk['minprice'] ?></th>
                <th><?= $tk['avgprice'] ?></th>
            </tr>
        <?php endforeach ?>
    </table>
    <div class="bieudo">
        <div id="myChart" style="width:100%; max-width:600px; height:500px;">
        </div>

        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                // Set Data
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng sản phẩm'],
                    <?php

                    $tongdm = count($listtk);
                    $dem = 0;
                    foreach ($listtk as $list) {
                        if ($dem == $tongdm) {
                            $dau = '';
                        } else {
                            $dau = ',';
                        }
                        echo "['" . $list['category_name'] . "'," . $list['countsp'] . "]" . $dau . "";
                    }
                    ?>
                ]);

                // Set Options
                const options = {
                    title: 'Biểu đồ thống kê sản phẩm'
                };

                // Draw
                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);

            }
        </script>
    </div>
</div>