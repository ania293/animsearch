<?php
    function sprawdz_email_i_haslo($email, $haslo) {
        $uzytkownik = pobierz_uzytkownika_po_emailu($email);
        $hash_hasla = md5($haslo);

        if($uzytkownik) {
            return $uzytkownik['hash_hasla'] == $hash_hasla;
        } else {
            return false;
        }
    }

    function zaloguj($email) {
        $_SESSION['email'] = $email;
    }

    function wyloguj() {
        unset($_SESSION['email']);
    }

    function czy_zalogowany() {
        return isset($_SESSION['email']);
    }

    function aktualny_uzytkownik() {
        $email = $_SESSION['email'];
        return pobierz_uzytkownika_po_emailu($email);
    }
?>