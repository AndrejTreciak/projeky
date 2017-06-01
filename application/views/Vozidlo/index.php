<div class="container">

    <br><br><br><br>
    <center><h3>Vozidlo</h3>
        <a href="<?php echo base_url('index.php/Vozidlo/pridaj'); ?>"><button type="submit" class="btn btn-classic">Pridať záznam</button></a></center><br>

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
                        <td><a href="<?php echo base_url('index.php/Vozidlo/zmen/'.$vozidlo->idVozidlo); ?>"><button type="submit" class="btn btn-info">Zmeniť</button></a>
                            <a href="<?php echo base_url('index.php/Vozidlo/vymaz/'.$vozidlo->idVozidlo); ?>"><button type="submit" class="btn btn-danger">Vymazať</button></a></td>
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