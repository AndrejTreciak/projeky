<div class="container">
    <br><br><br><br>
    <center><h3>Zmeň záznam</h3></center>

    <form action="<?php echo base_url('index.php/Taxikar/aktualizuj') ?>" method="post">
        <input type="hidden" name="txt_hidden" value="<?php echo $taxikar->idTaxikár; ?>">
        <div class="form-group">
            <label>Meno:</label>
            <input type="text" value="<?php echo $taxikar->Meno; ?>" class="form-control" name="meno">
        </div>

        <div class="form-group">
            <label>Priezvisko:</label>
            <input type="text" value="<?php echo $taxikar->Priezvisko; ?>" class="form-control" name="priezvisko">
        </div>

        <div class="form-group">
            <label>Vek:</label>
            <input type="text" value="<?php echo $taxikar->Vek; ?>" class="form-control" name="vek">
        </div>
        
        <div class="form-group">
            <label>Kontakt:</label>
            <select name="K_ID">
                <?php
                if($taxikar){
                    foreach($kontakt as $kontakt){
                        if($taxikar->Kontakt_idKontakt == $kontakt->idKontakt) {
                            ?>
                            <option selected value="<?php echo $kontakt->idKontakt; ?>"><?php echo $kontakt->idKontakt; ?></option>
                            <?php
                        }else{?>
                            <option  value="<?php echo $kontakt->idKontakt; ?>"><?php echo $kontakt->idKontakt; ?></option>
                            <?php
                        }
                    }
                }
                ?>
            </select>
        </div>

        <center>
            <a href="<?php echo base_url('index.php/Taxikar/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>

