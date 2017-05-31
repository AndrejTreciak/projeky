<div class="container">

    <br><br><br><br>
    <center><h3>Kam</h3>
    <a href="<?php echo base_url('index.php/Kam/pridaj'); ?>">Pridať záznam</a></center><br>

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