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
                        <div class="hero__wordmark">
                            <p class="hero__heading">mate</p>
                            <p class="hero__subheading">alles für dein Studium</p>
                        </div>
                        <a class="hero_animation--link"><button class="hero__button btn">Download</button></a>
                    </div>
                    <div class="hero__storelinks">
                        <a href="#"><img class="hero__storeimage" alt="appstore" src="../assets/Pre-order_on_the_App_Store_Badge_US-UK_RGB_blk_121217.png"></a>
                        <a href="#"><img class="hero__storeimage" alt="google playstore" src="../assets/google-play-badge.png"></a>
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
                        <div class="panel__paneltext">
                            <div class="tag">
                                <span class="tag__dot"></span>
                                <span class="tag__text">Home</span>
                            </div>
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
                        <div class="panel__paneltext">
                            <p class="panel__heading">"Fällt heute was aus?" "Weiß ich auch nicht" <br>
                            Wird es nie mehr geben!</p>
                            <div class="tag">
                                <span class="tag__dot"></span>
                                <span class="tag__text">News</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="container container--small">
                <section class="panel panel__home panel--primary">
                    <div class="panel__content">
                        <img class="panel__image panel__image--overlap" src="" alt="mate app news screen on smartphone">
                        <div class="panel__paneltext">
                            <p class="panel__heading">Studium in a Nutshell</p>
                            <p class="panel__text">
                                    Ganz entspannt Kurse wählen und Noten einsehen
                            </p>
                            <div class="tag">
                                <span class="tag__dot"></span>
                                <span class="tag__text">Verwaltung</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- overlay -->

            <div class="container container--wide">
                <section class="panel panel--primary">
                    <div class="panel__content">
                        <h1 class="panel__heading">Coming soon</h1>
                        <p class="panel__text">Wir bieten, was Student:innen zusteht. Studium mit simpler digitaler Organisation.</p>
                        <a class="panel__btn panel__btn--link btn"><p class="panel__btn--text">Download now<img class="panel__btn--arrow" src="../assets/arrow.png" alt="arrow"></p></a>
                    </div>
                </section>
            </div>
        </main>

        <?php include 'common/footer.php';?>

        <!-- Scripts -->
        <script src="js/main.js" type="text/javascript"></script>
	</body>
</html>