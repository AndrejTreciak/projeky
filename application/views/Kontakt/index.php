<div class="container">

    <br><br><br><br>
    <center><h3>Kontakt</h3>
        <a href="<?php echo base_url('index.php/Kontakt/pridaj'); ?>">Pridať záznam</a></center><br>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <th>Telefonne cislo</th>
                <th>Akcie</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if($kontakt){
                foreach($kontakt as $kontakt){
                    ?>
                    <tr>
                        <td><?php echo $kontakt->idKontakt; ?></td>
                        <td><?php echo $kontakt->Tel_Cislo; ?></td>
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