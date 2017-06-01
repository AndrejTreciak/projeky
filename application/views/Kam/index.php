<div class="container">

    <br><br><br><br>
    <center><h3>Kam</h3>
    <a href="<?php echo base_url('index.php/Kam/pridaj'); ?>"><button type="submit" class="btn btn-classic">Pridať záznam</button></a></center><br>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <th>Obec</th>
                <th>Ulica</th>
                <th>Akcie</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if($kam){
                foreach($kam as $kam){
                    ?>
                    <tr>
                        <td><?php echo $kam->idKam; ?></td>
                        <td><?php echo $kam->Obec; ?></td>
                        <td><?php echo $kam->Ulica; ?></td>
                        <td><a href="<?php echo base_url('index.php/Kam/zmen/'.$kam->idKam); ?>"><button type="submit" class="btn btn-info">Zmeniť</button></a>
                            <a href="<?php echo base_url('index.php/Kam/vymaz/'.$kam->idKam); ?>"><button type="submit" class="btn btn-danger">Vymazať</button></a></td>
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
