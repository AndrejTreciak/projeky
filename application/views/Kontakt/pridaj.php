<div class="container">
    <br><br><br><br>
    <center><h3>Pridaj záznam</h3></center>
    <form action="<?php echo base_url('index.php/Kontakt/potvrd') ?>" method="post">
        <div class="form-group">
            <label>Telefonne cislo:</label>
            <input type="text" class="form-control" name="telc">
        </div>

        <center>
            <a href="<?php echo base_url('index.php/Kontakt/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>