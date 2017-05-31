<center><h3>Tabuľka Odkial &nbsp;&nbsp;
        <a href="<?php echo base_url('index.php/Odkial/add'); ?>" class="btn btn-success btn-xs""><span class="glyphicon">&#x2b;</span>&nbsp;Pridať záznam</a></h3></center><br>

<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <th>Znacka</th>
                <th>EVC</th>
                <th>Taxikar</th>
                <th>Akcie</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if($vozidlo){
                foreach($vozidlo as $vozidlo){
                    ?>
                    <tr>
                        <td><?php echo $vozidlo->idVozidlo; ?></td>
                        <td><?php echo $vozidlo->Znacka; ?></td>
                        <td><?php echo $vozidlo->Evidencne_Cislo; ?></td>
                        <td><?php echo $vozidlo->Taxikár_idTaxikár; ?></td>
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