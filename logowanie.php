<?php
    include 'animsearch.php';

    if($_POST['akcja'] == 'zaloguj-akcja' && isset($_POST['email']) && isset($_POST['haslo'])) {
        if(sprawdz_email_i_haslo($_POST['email'], $_POST['haslo'])) {
            zaloguj($_POST['email']);
        }
    }

    if($_POST['akcja'] == 'wyloguj-akcja') {
        wyloguj();
    }

    header('Location: glowna.php');
    die();

    //$_POST zmienna w ktorej znajduja sie wartosci wyslane za pomoca metody HTTP POST
?>

