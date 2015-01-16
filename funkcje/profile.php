<?php
    function czy_wybrany_profil() {
        return array_key_exists('id', $_GET);
    }
?>
