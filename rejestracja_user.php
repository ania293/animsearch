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

        
        <div class="content-rejestracja">
                
                    <b>Rejestracja użytkownika</b>
                    <form method="POST" action="rejestracja">

                        <div class="rejestracja-blok clearfix">
                            <div class="rejestracja-element">
                                <div class="rejestracja-label">Imię</div>
                                <div class="rejestracja-input">
                                <input "type=text" name="imie">
                                <?php echo $POST;?>
                                </div>
                            </div>

                            <div class="rejestracja-element">
                                <div class="rejestracja-label">Nazwisko</div>
                                <div class="rejestracja-input">
                                    <input "type=text" name="nazwisko">
                                </div>
                            </div>
                        </div>

                        <div class="rejestracja-blok clearfix">
                            <div class="rejestracja-element">
                                <div class="rejestracja-label">Adres</div>
                                <div class="rejestracja-input">
                                    <input "type=text" name="adres">
                                </div>
                            </div>

                            <div class="rejestracja-element">
                                <div class="rejestracja-label">Miejscowość</div>
                                <div class="rejestracja-input">
                                    <input "type=text" name="miejscowosc">
                                </div>
                            </div> 
                        </div>

                        <div class="rejestracja-blok clearfix">
                            <div class="rejestracja-element">
                                <div class="rejestracja-label">Nazwa Schroniska</div>
                                <div class="rejestracja-input">
                                    <input "type=text" name="nazwa-schroniska">
                                </div>
                            </div>

                            <div class="rejestracja-element">
                                <div class="rejestracja-label">Adres</div>
                                <div class="rejestracja-input">
                                    <input "type=text" name="adres">
                                </div>
                            </div> 
                        </div>

                        <div class="rejestracja-blok clearfix">
                            <div class="rejestracja-element">
                                <div class="rejestracja-label">Telefon</div>
                                <div class="rejestracja-input">
                                    <input "type=text" name="telefon">
                                </div>
                            </div>
                        </div>

                        <div class="rejestracja-blok clearfix">
                            <div class="rejestracja-element">
                                <div class="rejestracja-label">Email</div>
                                <div class="rejestracja-input">
                                    <input "type=text" name="email">
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="submit">

                    </form>
                
        </div>
                

            
            <div id="stopka">
            Copyrigth 2014 by MM
            </div>

            
        </body>
    </html>
