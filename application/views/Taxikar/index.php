<center><h3>Tabuľka Odkial &nbsp;&nbsp;
        <a href="<?php echo base_url('index.php/Odkial/add'); ?>" class="btn btn-success btn-xs""><span class="glyphicon">&#x2b;</span>&nbsp;Pridať záznam</a></h3></center><br>

<div class="container">
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