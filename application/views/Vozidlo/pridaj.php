<div class="container">
    <br><br><br><br>
    <center><h3>Pridaj záznam</h3></center>

    <form action="<?php echo base_url('index.php/Vozidlo/potvrd') ?>" method="post">
        <div class="form-group">
            <label>Znacka:</label>
            <input type="text" class="form-control" name="znacka">
        </div>

        <div class="form-group">
            <label>Evidencne cislo:</label>
            <input type="text" class="form-control" name="evc">
        </div>

        <div class="form-group">
            <label>ID Taxikar:</label>
            <select name="T_ID">
                <?php
                if($vozidlo){
                    foreach($vozidlo as $vozidlo){
                        ?>
                        <option value="<?php echo $vozidlo->Taxikár_idTaxikár; ?>"><?php echo $vozidlo->Taxikár_idTaxikár; ?></option>
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

