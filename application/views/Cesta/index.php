<center><h3>Tabuľka Odkial &nbsp;&nbsp;
        <a href="<?php echo base_url('index.php/Odkial/add'); ?>" class="btn btn-success btn-xs""><span class="glyphicon">&#x2b;</span>&nbsp;Pridať záznam</a></h3></center><br>

<div class="container">
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