<?php include 'animsearch.php'; ?>

<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AnimSearch</title>
    <link rel="Stylesheet" type="text/css" href="style.css" />
</head>

    <body>
        <div class="nag-wrapper clearfix">
            <div id="nag">
                <h2> AnimSearch</h2>
				<h6>Weź zwierze, zyskaj przyjaciela!</h6>
            </div>


            <div class="log">
            <b>Logowanie</b>
                <?php include "formularze/logowanie.php"; ?>
            </div>
        </div>

        <div class="menu clearfix">
  <ol>
    <li><a href="glowna.php">strona główna</a>
    </li>

    <li><a href="schroniska.php">schroniska</a>
    </li>

	<li><a href="#">adopcja</a>
	  <ul>
        <li><a href="rzeczywista.php">rzeczywista</a></li>
        <li><a href="wirtualna.php">wirtualna</a></li>
      </ul>
	</li>
    <li><a href="rasy.php">rasy</a>
    </li>
	<li><a href="profile.php">profile</a>
    </li>
	<li><a href="sponsorzy.php">sponsorzy</a>
    </li>
  </ol>
        </div>

        <div class="content-moj_profil clearfix">
        <?php print_r($_GET) ?>

            <?php
                if(czy_zalogowany()) {
                  if(czy_jest_adminem(aktualny_uzytkownik())) {
                    include 'profil_administratora/profil_administratora.php';
                  } else {
                    include 'profil_uzytkownika/profil_uzytkownika.php';
                  }
                } else {
            ?>
                Tylko dla zalogowanych użytkowników.
            <?php
                }
            ?>
        </div>


        <div id="stopka">
        Copyrigth 2014 by MM
        </div>


    </body>
</html>
