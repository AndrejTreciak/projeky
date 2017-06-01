<div class="container">
    <br><br><br><br>
    <center><h3>Zmena záznamu</h3></center>
    <form action="<?php echo base_url('index.php/Kam/aktualizuj') ?>" method="post">
        <input type="hidden" name="txt_hidden" value="<?php echo $kam->idKam; ?>">
        <div class="form-group">
            <label for="email">Obec:</label>
            <input type="text" value="<?php echo $kam->Obec; ?>" class="form-control" name="obec">
        </div>

        <div class="form-group">
            <label for="pwd">Ulica:</label>
            <input type="text" value="<?php echo $kam->Ulica; ?>" class="form-control" name="ulica">
        </div>

        <center>
            <a href="<?php echo base_url('index.php/Kam/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>