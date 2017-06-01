<div class="container">

    <br><br><br><br>
    <center><h3>Odkial</h3>
        <a href="<?php echo base_url('index.php/Odkial/pridaj'); ?>"><button type="submit" class="btn btn-classic">Pridať záznam</button></a></center><br>

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
                if($odkial){
                    foreach($odkial as $odkial){
                        ?>
                        <tr>
                            <td><?php echo $odkial->idOdkial; ?></td>
                            <td><?php echo $odkial->Obec; ?></td>
                            <td><?php echo $odkial->Ulica; ?></td>
                            <td><a href="<?php echo base_url('index.php/Odkial/zmen/'.$odkial->idOdkial); ?>"><button type="submit" class="btn btn-info">Zmeniť</button></a>
                                <a href="<?php echo base_url('index.php/Odkial/vymaz/'.$odkial->idOdkial); ?>"><button type="submit" class="btn btn-danger">Vymazať</button></a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>