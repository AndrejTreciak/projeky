<div class="container">
    <br><br><br><br>
    <center><h3>Zmen záznam</h3></center>

    <form action="<?php echo base_url('index.php/Cesta/aktualizuj') ?>" method="post">
        <input type="hidden" name="txt_hidden" value="<?php echo $cesta->idCesta; ?>">
        <div class="form-group">
            <label>Cena:</label>
            <input type="text" value="<?php echo $cesta->Cena; ?>" class="form-control" name="cena">
        </div>

        <div class="form-group">
            <label>Datum:</label>
            <input type="text" value="<?php echo $cesta->Datum; ?>" placeholder="RRRR-MM-DD" class="form-control" name="datum">
        </div>

        <div class="form-group">
            <label>Odkial:</label>
            <select name="odkial">
                <?php
                if($odkial){
                    foreach($odkial as $odkial){
                        ?>
                        <option value="<?php echo $odkial->Odkial_idOdkial; ?>"><?php echo $odkial->Odkial_idOdkial; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label>Kam:</label>
            <select name="kam">
                <?php
                if($kam){
                    foreach($kam as $kam){
                        ?>
                        <option value="<?php echo $kam->Kam_idKam; ?>"><?php echo $kam->Kam_idKam; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label>Vozidlo:</label>
            <select name="vozidlo">
                <?php
                if($vozidlo){
                    foreach($vozidlo as $vozidlo){
                        ?>
                        <option value="<?php echo $vozidlo->Vozidlo_idVozidlo; ?>"><?php echo $vozidlo->Vozidlo_idVozidlo; ?></option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>

        <center>
            <a href="<?php echo base_url('index.php/Cesta/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>
