<div class="container">

    <br><br><br><br>
    <center><h3>Taxikar</h3>
        <a href="<?php echo base_url('index.php/Taxikar/pridaj'); ?>">Pridať záznam</a></center><br>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <th>Meno</th>
                <th>Priezvisko</th>
                <th>Vek</th>
                <th>Kontakt</th>
                <th>Akcie</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if($taxikar){
                foreach($taxikar as $taxikar){
                    ?>
                    <tr>
                        <td><?php echo $taxikar->idTaxikár; ?></td>
                        <td><?php echo $taxikar->Meno; ?></td>
                        <td><?php echo $taxikar->Priezvisko; ?></td>
                        <td><?php echo $taxikar->Vek; ?></td>
                        <td><?php echo $taxikar->Kontakt_idKontakt; ?></td>
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