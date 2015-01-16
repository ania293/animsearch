<?php 
    $schronisko = pobierz_schronisko_po_id($_GET['id']);
?>

<h4> <?php echo "{$schronisko['nazwa']} {$schronisko['miasto']}"; ?> </h4>
<p>
    <?php echo $schronisko['opis']; ?>
</p>