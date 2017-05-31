<div class="container">
    <br><br><br><br>
    <center><h3>Pridaj záznam</h3></center>
    <form action="<?php echo base_url('index.php/Odkial/potvrd') ?>" method="post">
        <div class="form-group">
            <label for="email">Obec:</label>
            <input type="text" class="form-control" name="obec">
        </div>

        <div class="form-group">
            <label for="pwd">Ulica:</label>
            <input type="text" class="form-control" name="ulica">
        </div>

        <center>
            <a href="<?php echo base_url('index.php/Odkial/index'); ?>"<button type="submit" class="btn btn-warning">Späť</button></a>
            <button type="submit" class="btn btn-success">Odoslať</button></a>
        </center>
    </form>
</div>