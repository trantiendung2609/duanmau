<article class="article_bieu_do_thong_ke ">
    <div class="container">
        <div class="article_admin_title">
            <h2>thống kê danh mục bằng biểu đồ</h2>
        </div>
        <div class="article_admin_bieu_do text-center">
            <div id="myChart" style="width:100%; height:500px;">
            </div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script>
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Danh mục', 'Thống kê hàng hóa'],
                        <?php foreach ($thong_ke as $item) : ?>["<?= $item['ten_loai'] ?>", <?= $item['soluong'] ?>],
                        <?php endforeach ?>
                    ]);

                    var options = {
                        title: 'Thống kê sản phẩm'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                    chart.draw(data, options);
                }
            </script>
            <a class="btn btn-primary btn-lg thong_ke" href="admin-thong-ke">Xem bảng thống kê</a>
        </div>
    </div>
</article>