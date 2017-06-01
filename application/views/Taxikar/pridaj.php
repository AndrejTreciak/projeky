<div class="container">
    <br><br><br><br>
    <center><h3>Pridaj záznam</h3></center>

    <form action="<?php echo base_url('index.php/Taxikar/potvrd') ?>" method="post">
        <div class="form-group">
            <label>Meno:</label>
            <input type="text" class="form-control" name="meno">
        </div>

        <div class="form-group">
            <label>Priezvisko:</label>
            <input type="text" class="form-control" name="priezvisko">
        </div>

        <div class="form-group">
            <label>Vek:</label>
            <input type="text" class="form-control" name="vek">
        </div>

        <div class="form-group">
            <label>Kontakt:</label>
            <select name="K_ID">
                <?php
                if($taxikar){
                    foreach($taxikar as $taxikar){
                        ?>
                        <option value="<?php echo $taxikar->Kontakt_idKontakt; ?>"><?php echo $taxikar->Kontakt_idKontakt; ?></option>
                        <?php
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

