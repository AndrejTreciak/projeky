<div class="container">

    <br><br><br><br>
    <center><h3>Cesta</h3></center>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <th>Cena</th>
                <th>Datum</th>
                <th>Odkial</th>
                <th>Kam</th>
                <th>Vozidlo</th>
                <th>Akcie</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if($cesta){
                foreach($cesta as $cesta){
                    ?>
                    <tr>
                        <td><?php echo $cesta->idCesta; ?></td>
                        <td><?php echo $cesta->Cena; ?></td>
                        <td><?php echo $cesta->Datum; ?></td>
                        <td><?php echo $cesta->Odkial_idOdkial; ?></td>
                        <td><?php echo $cesta->Kam_idKam; ?></td>
                        <td><?php echo $cesta->Vozidlo_idVozidlo; ?></td>
                        <td>Edit, Delete</td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>