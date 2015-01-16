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

        <?php
            
        ?>

        <div class="content clearfix">
            <div class="wysz">
                <b>Wyszukiwarka</b>
                <form action="wyszukiwarka">
                    <div class="wysz-element clearfix">
                        <div class="wysz-label">Gatunek</div>
                        <div class="wysz-input">
                            <input "type=text" name="gatunek">
                        </div>
                    </div>
                    <div class="wysz-element clearfix">
                        <div class="wysz-label">Rasa</div>
                        <div class="wysz-input">
                            <input "type=text" name="rasa">
                        </div>
                    </div>
                    <div class="wysz-element clearfix">
                        <div class="wysz-label">Płeć</div>
                        <div class="wysz-input">
                            <input "type=text" name="plec">
                        </div>
                    </div>
                    <div class="wysz-element clearfix">
                        <div class="wysz-label">Wiek</div>
                        <div class="wysz-input">
                            <input "type=text" name="wiek"></div
                        </div>
                    </div>
                    <div class="wysz-element clearfix">
                        <div class="wysz-label">Data przyjęcia</div>
                        <div class="wysz-input">
                            <input "type=text" name="data przyjecie">
                        </div>
                    </div>
                    <input type="submit" value="wyszukaj">
                </form>
            </div>

            <?php include 'zwierzeta/lista_profili.php' ?>
            
        </div>

        
        <div id="stopka">
        Copyrigth 2014 by MM
        </div>

        
    </body>
</html>