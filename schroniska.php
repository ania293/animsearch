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
	
		<div class="content_schroniska claerfix">
			<div class="wysz-sch">
				<b>Wyszukiwarka schronisk</b>
				<form action="Wyszukiwarka schronisk">
					<div class="wysz-sch-element clearfix">
						<div class="wysz-sch-label">wojewodźtwo</div>
						<div class="wysz-sch-input">
							<input "type=text" name="wojewodztwo">
						</div>
					</div>
					<div class="wysz-sch-element clearfix">
						<div class="wysz-sch-label">miasto</div>
						<div class="wysz-sch-input">
							<input "type=text" name="miasto">
						</div>
					</div>
					<div class="wysz-sch-element clearfix">
						<div class="wysz-sch-label">ulica</div>
						<div class="wysz-sch-input">
							<input "type=text" name="ulica">
						</div>
					</div>
					<input type="submit" value="wyszukaj">
				</form>
			</div>
		
			<div class="sch">
            <?php
                if(czy_wybrany_profil()) {
                    include 'schroniska/wybrane_schronisko.php';
                } else {
                    include 'schroniska/lista_schronisk.php';
                }
            ?>
            </div>

		</div>	
        <div id="stopka">
        Copyrigth 2014 by MM
        </div>

        
    </body>
</html>

