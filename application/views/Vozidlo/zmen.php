<div class="container">
    <br><br><br><br>
    <center><h3>Zmena záznamu</h3></center>

    <form action="<?php echo base_url('index.php/Vozidlo/aktualizuj') ?>" method="post">
        <input type="hidden" name="txt_hidden" value="<?php echo $vozidlo->idVozidlo; ?>">
        <div class="form-group">
            <label>Znacka:</label>
            <input type="text" value="<?php echo $vozidlo->Znacka; ?>" class="form-control" name="znacka">
        </div>

        <div class="form-group">
            <label>Evidencne cislo:</label>
            <input type="text" value="<?php echo $vozidlo->Evidencne_Cislo; ?>" class="form-control" name="evc">
        </div>

        <div class="form-group">
            <label>ID Taxikar:</label>
            <select name="T_ID">
                <?php
                if($taxikar){
                    foreach($taxikar as $taxikar){
                        if($taxikar->idTaxikár == $vozidlo->Taxikár_idTaxikár) {
                            ?>
                            <option selected
                                    value="<?php echo $taxikar->idTaxikár; ?>"><?php echo $taxikar->idTaxikár; ?></option>
                            <?php
                        }else{
                            ?>
                            <option
                                value="<?php echo $taxikar->idTaxikár; ?>"><?php echo $taxikar->idTaxikár; ?></option>
                            <?php
                        }
                    }
                }
                ?>
            </select>
        </div>

        <center>
            <a href="<?php echo base_url('index.php/Vozidlo/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>

