<br><br><br>

<center>
    <h3>Ceny jednolivých ciest</h3><br><br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div"></div>


        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Trasa', 'Cena'],
                    <?php
                    foreach ($ceny as $ceny) {
                        echo "[ '$ceny->odkial - $ceny->kam', $ceny->Cena],";
                    }
                    ?>
                ]);

                var options = {
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        </script>

    <div id="piechart" style="width: 900px; height: 500px;"></div>

