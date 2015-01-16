<?php
    if(czy_zalogowany()) {
?>
    <div>Zalogowany jako: <?php echo aktualny_uzytkownik()['email']; ?></div>
    <div><a href="moj_profil.php">Mój profil</a></div>
    <form method="POST" action="logowanie.php">
        <button type="submit" name="akcja" value="wyloguj-akcja">Wyloguj</button>
    </form>
<?php
    } else {

?>
    <form method="POST" action="logowanie.php">
        Email: <input type="text" name="email"><br>
        Haslo: <input type="password" name="haslo"><br>
        <button type="submit" name="akcja" value="zaloguj-akcja">Zaloguj</button>
    </form>
    <div><a href="rejestracja_schroniska.php">Zarejestruj schronisko</a></div>
    <div><a href="rejestracja_user.php">Zarejestruj się</a></div>
<?php
    }
?>
