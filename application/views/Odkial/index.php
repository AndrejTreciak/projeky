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
                            <td>Edit, Delete</td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>