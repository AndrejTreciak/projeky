<div class="container">

    <br><br><br><br>
    <center><h3>Taxikar</h3>
        <a href="<?php echo base_url('index.php/Taxikar/pridaj'); ?>"><button type="submit" class="btn btn-classic">Pridať záznam</button></a></center><br>

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
                        <td><a href="<?php echo base_url('index.php/Taxikar/zmen/'.$taxikar->idTaxikár); ?>"><button type="submit" class="btn btn-info">Zmeniť</button></a>
                            <a href="<?php echo base_url('index.php/Taxikar/vymaz/'.$taxikar->idTaxikár); ?>"><button type="submit" class="btn btn-danger">Vymazať</button></a></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<center>
    <?php echo $this->pagination->create_links() ?>
</center>