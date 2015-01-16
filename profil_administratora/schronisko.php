
<?php
        $schronisko = pobierz_schronisko_dla_uzytkownika(aktualny_uzytkownik());

       if($schronisko) {
?>

    <h4> <?php echo "{$schronisko['nazwa']} {$schronisko['miasto']}"; ?> </h4>
    <img src="http://placehold.it/150x150" />

<?php
    } else {
?>
    Schronisko nie istnieje
<?php
    }
?>