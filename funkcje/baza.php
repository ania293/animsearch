<?php
    mysql_connect("localhost","root","");
    mysql_select_db("19mati90r_schro");
    mysql_set_charset("UTF8");

    function pobierz_uzytkownika_po_emailu($email) {
        $oczyszczony_email = mysql_real_escape_string(trim($email));
        $zapytanie = "SELECT * FROM uzytkownik WHERE email = \"{$oczyszczony_email}\";";

        $wynik = mysql_query($zapytanie);

        $wiersz = mysql_fetch_assoc($wynik);

        mysql_free_result($wynik);

        return $wiersz ? $wiersz : [];
    }

    function pobierz_schronisko_dla_uzytkownika($uzytkownik) {
        $id_uzytkownika = $uzytkownik['id_uzytkownik'];

        $zapytanie = "SELECT * FROM uzytkownik JOIN schroniska ON uzytkownik.id_schro = schroniska.id_schro
                      WHERE uzytkownik.id_uzytkownik = \"{$id_uzytkownika}\";";

        $wynik = mysql_query($zapytanie);

        $wiersz = mysql_fetch_assoc($wynik);

        mysql_free_result($wynik);

        return $wiersz ? $wiersz : [];  //jesli nie bedzie zadnej wartosci to zwroci pusta tablice
    }

    function czy_jest_adminem($uzytkownik){
        return $uzytkownik['id_schro'] != 0;
    }

    function pobierz_zwierzeta_dla_schroniska($schronisko) {
        $id_schroniska = $schronisko['id'];

        $zapytanie = "SELECT * FROM zwierzeta JOIN schroniska ON zwierzeta.id_schro = schroniska.id_schro
                      WHERE schroniska.id_schro = \"{$id_schroniska}\";";

        $wynik = mysql_query($zapytanie);

        $zwierzeta = [];

        while($wiersz = mysql_fetch_assoc($wynik)) {
            array_push($zwierzeta, $wiersz); // dodaje elementy do tablicy podanej jako pierwszy argument;
        }

        mysql_free_result($wynik);

        return $zwierzeta;
    }

    function pobierz_wszystkie_zwierzeta() {
        $zapytanie = "SELECT * FROM zwierzeta;";

        $wynik = mysql_query($zapytanie);

        $zwierzeta = [];

        while($wiersz = mysql_fetch_assoc($wynik)) {
            array_push($zwierzeta, $wiersz); // dodaje elementy do tablicy podanej jako pierwszy argument;
        }

        mysql_free_result($wynik);

        return $zwierzeta;
    }

    function pobierz_zwierze_po_id($id) {
        $oczyszczone_id = mysql_real_escape_string(trim($id));
        $zapytanie = "SELECT * FROM zwierzeta WHERE id_zwierz = \"{$oczyszczone_id}\";";

        $wynik = mysql_query($zapytanie);

        $wiersz = mysql_fetch_assoc($wynik);

        mysql_free_result($wynik);

        return $wiersz ? $wiersz : [];

    }

    function pobierz_wszystkie_schroniska() {
        $zapytanie = "SELECT * FROM schroniska;";

        $wynik = mysql_query($zapytanie);

        $schroniska = [];

        while($wiersz = mysql_fetch_assoc($wynik)) {
            array_push($schroniska, $wiersz); // dodaje elementy do tablicy podanej jako pierwszy argument;
        }

        mysql_free_result($wynik);

        return $schroniska;
    }

    function pobierz_schronisko_po_id($id) {
        $oczyszczone_id = mysql_real_escape_string(trim($id));
        $zapytanie = "SELECT * FROM schroniska WHERE id_schro = \"{$oczyszczone_id}\";";

        $wynik = mysql_query($zapytanie);

        $wiersz = mysql_fetch_assoc($wynik);

        mysql_free_result($wynik);

        return $wiersz ? $wiersz : [];

    }

    
?>
