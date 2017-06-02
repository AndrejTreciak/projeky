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

            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

            chart.draw(data, options);
        }
    </script>

    <div id="piechart1" style="width: 900px; height: 500px;"></div>




    <h3>Počet ciest z danej adresy</h3><br><br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div"></div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Obec', 'Pocet'],
                <?php
                foreach ($odkial as $odkial) {
                    echo "[ '$odkial->Obec', $odkial->pocet],";
                }
                ?>
            ]);

            var options = {
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

            chart.draw(data, options);
        }
    </script>

    <div id="piechart2" style="width: 900px; height: 500px;"></div>





    <h3>Počet ciest na danú adresu</h3><br><br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div"></div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Obec', 'Pocet'],
                <?php
                foreach ($kam as $kam) {
                    echo "[ '$kam->Obec', $kam->pocet],";
                }
                ?>
            ]);

            var options = {
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

            chart.draw(data, options);
        }
    </script>

    <div id="piechart3" style="width: 900px; height: 500px;"></div>




    <h3>Počet ciest v danom mesiaci</h3><br><br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div"></div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Mesiac', 'Pocet'],
                <?php
                foreach ($mesiac as $mesiac) {
                    echo "[ '$mesiac->datum ', $mesiac->pocet],";
                }
                ?>
            ]);

            var options = {
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

            chart.draw(data, options);
        }
    </script>

    <div id="piechart4" style="width: 900px; height: 500px;"></div>