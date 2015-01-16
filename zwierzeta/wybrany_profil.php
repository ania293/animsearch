<?php
    $zwierze = pobierz_zwierze_po_id($_GET['id']);

    if($zwierze) {
?>
    <div>
        <div class="profile-opis"
        <div><?php echo "{$zwierze['nazwa']} {$zwierze['gatunek']}"; ?> </div>
        <img src="http://placehold.it/150x150" />
        </div>
       
        
        <div>
            <?php echo $zwierze['historia'];?>
        </div>
    </div>
<?php
    } else {
?>
    Zwierze nie istnieje
<?php
    }
?>
