<center><h3>Tabuľka Odkial &nbsp;&nbsp;
        <a href="<?php echo base_url('index.php/Odkial/add'); ?>" class="btn btn-success btn-xs""><span class="glyphicon">&#x2b;</span>&nbsp;Pridať záznam</a></h3></center><br>

<div class="container">
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