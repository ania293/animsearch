<div class="clearfix">
    <div class="blok">Imie:</div>
    <div><?php echo aktualny_uzytkownik()['imie']; ?></div>
</div>
<div class="clearfix">
    <div class="blok">Nazwisko:</div>
    <div><?php echo aktualny_uzytkownik()['nazwisko']; ?></div>
</div>

<div class="podblok">
    <div><a href="moj_profil.php?strona=schronisko">Moje schronisko</a></div>
    <div><a href="moj_profil.php?strona=oplaty">Opłaty</a></div>
    <div><a href="moj_profil.php?strona=wiadomosci">Wiadomości</a></div>
    <div><a href="moj_profil.php?strona=ustawienia">Ustawienia</a></div>
</div>

<div>

        <div class="podstrona">

<?php
    if(array_key_exists('strona', $_GET)) { // sprawdzamy czy klucz istnieje w hashu (mapa, tablica asocjacyjna), jeżeli będziemy próbowali użyć nieistniejącego klucza dostaniemy warning w treści strony, a tego nie checmy
        switch($_GET['strona']) {
            case 'oplaty': {
                include 'profil_administratora/oplaty.php';
                break;
            }
            case 'wiadomosci': {
                include 'profil_administratora/wiadomosci.php';
                break;
            }
            case 'ustawienia': {
                include 'profil_administratora/ustawienia.php';
                break;
            }
            case 'schronisko': {
                include 'profil_administratora/schronisko.php';
            }
        }
    } else {
        include 'profil_administratora/witaj.php';
    }
?>
</div>
    
</div>
