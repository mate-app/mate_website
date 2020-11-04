<?php include '../config/config.php';?>

<!DOCTYPE html>
<html lang="de">
	<head>
        <meta charset="utf-8">
        <title><?=$TITLE?></title>

        <!-- SEO Meta -->
        <meta name="robots" content="index, follow">

        <meta name="og:site_name" content="Mate App">
        <meta name="og:locale" content="de_DE">
        <meta name="og:type" content="website">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@officialmateapp">

        <!-- other Meta-->
        <meta name="author" content="Mathis Fandre; Ramin Nobakht; Tobias Poertner">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- FavIcon -->

        <!-- Styles -->
        <link rel="stylesheet" href="css/main.css" media="screen">
	</head>
	<body>

        <?php include 'common/header.php';?>


        <main>
            <div class="container container--small">
                <section class="hero">
                    <div class="hero__animation">
                        <img class="hero__animation" alt="mate logo animation" src="../assets/Mate Logo.png">
                        <a href="download"><button class="hero__button btn"><img alt="download button" src="../assets/Button.png"></button></a>
                    </div>
                    <div class="hero__storelinks">
                        <a href="#"><img class="hero__storeimage" alt="appstore" src="../assets/Pre-order_on_the_App_Store_Badge_US-UK_RGB_blk_121217.png"></a>
                        <a href="#"><img class="hero__storeimage" alt="google playstore" src="../assets/google-play-badge.png"></a>
                    </div>
                </section>
            </div>

            <!--small home panel -->
            <div class="container container--small">
                <section class="panel panel--home panel--primary">
                    <div class="panel__content panel__content--newsletter">
                        <h3 class="panel__heading">Bleib auf dem Laufenden</h3>
                        <p class="panel__text panel__text--info">ohne Spam</p>
                        <button class="newsletter__button btn" name ="newsletter" type="button">Newsletter bestellen</button>
                    </div>
                </section>
            </div>

            <!-- big home panels -->
            <div class="container container--small">
                <section class="panel panel--home panel--secondary">
                    <div class="panel__content">
                        <img class="panel__image panel__image--overlap" src="../assets/Home frame.png" alt="mate app on smartphone">
                        <div class="panel__paneltext">
                            <h2 class="panel__heading">mate</h2>
                            <p class="panel__subtitle">a personal studybuddy</p>
                            <p class="panel__text">Ist genau das! Ein alltäglicher Begteiler, ...</p>
                            <div class="tag">
                                <span class="tag__dot"></span>
                                <span class="tag__text">Home</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="container container--small">
                <section class="panel panel--home panel--primary">
                    <div class="panel__content">
                        <div class="tag">
                            <span class="tag__dot"></span>
                            <span class="tag__text">Home</span>
                        </div>
                        <p class="panel__heading">Alle Mensagerichte Tagesaktuell und die Möglichkeit
                                    zu sehen, was anderen schmeckt
                        </p>
                    </div>
                    <div class="panel__image panel__image--nooverlap"><img src=""></div>
                </section>
            </div>

            <div class="container container--small">
                <section class="panel panel--home panel--tertiary">
                    <div class="panel__content">
                        <img class="panel__image panel__image--nooverlap" src="" alt="mate app news screen on smartphone">
                        <p class="panel__heading">"Fällt heute was aus?" "Weiß ich auch nicht" <br>
                        Wird es nie mehr geben!</p>
                        <div class="tag">
                            <span class="tag__dot"></span>
                            <span class="tag__text">News</span>
                        </div>
                    </div>
                </section>
            </div>

            <div class="container container--small">
                <section class="panel panel__home panel--tertiary">
                    <div class="panel__content">
                        <img class="panel__image panel__image--overlap" src="" alt="mate app news screen on smartphone">
                        <p class="panel__heading">Studium in a Nutshell</p>
                        <p class="panel__text">
                                Ganz entspannt Kurse wählen und Noten einsehen
                        </p>
                        <div class="tag">
                            <span class="tag__dot"></span>
                            <span class="tag__text">Verwaltung</span>
                        </div>
                    </div>
                </section>
            </div>

            <div class="container container--small">
                <section class="panel panel__home panel--tertiary">
                    <div class="panel__content">
                        <h2 class="panel__heading"><strong>Beta</strong></h2>
                        <h3 class="panel__subtitle">Ab Oktober 2020</h3>
                        <p>Wir bieten, was Student*Innen zusteht. Studium mit einfacher digitaler Organisation.</p>
                        <a href="#"><button class="panel__button btn">Betatester*In werden</button></a>
                    </div>
                </section>
            </div>

            <!-- overlay -->

            <div class="container container--wide">
                <section class="panel panel--tertiary">
                    <div class="panel__content">
                        <h1 class="panel__heading">Newsletter</h1>
                        <form class="panel__form">
                            <label for="panel__label">e-mail</label>
                            <input id="newsletter" type="email" class="panel__input">
                            <p class="panel__text">Du hast die <a class="panel__link" href="html/privacy.php">Datenschutzbestimmungen</a>
                            zur Kenntnis genommen. Du versprichst, dass du kein Roboter bist.</p>
                            <div class="panel__captcha">CAPTCHA</div>
                            <p class="panel__text">Wir versprechen: Kein Spam,
                                sondern maximal einmal monatlich wirklich relevante
                                und zusammengefasste Infromationen zu deiner neuen App.
                            </p>
                            <button class="panel__button btn" type="submit" value="submit">Jetzt anmelden</button>
                        </form>
                    </div>
                </section>
            </div>
        </main>

        <?php include 'common/footer.php';?>

        <!-- Scripts -->
        <script src="js/main.js" type="text/javascript"></script>
	</body>
</html>