<div class="container">

    <br><br><br><br>
    <center><h3>Vozidlo</h3><br>
    <a href="<?php echo base_url('index.php/Vozidlo/pridaj'); ?>">Pridať záznam</a></center><br>

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