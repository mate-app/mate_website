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
        <link rel="stylesheet" href="../css/main.css" media="screen">
	</head>
	<body>

        <?php include 'common/header.php';?>


        <main>
            <div class="container container--small">
                <section class="hero hero--nocontent">
                    <h1 class="hero__heading">Kontakt</h1>
                    <h3 class="hero__subheading">
                        Du hast Verbesserungsvorschläge, Änderungen oder Fragen? 
                        <br> Schreib uns. 
                    </h3>
                </section>
            </div>    

            <!-- Contact Form -->
            <div class="container container--small">
                <section class="form">
                    <form class="form__form">
                        <label class="form__label" for="name">name</label>
                        <input class="form__input" type="text" name="name" id="name"><br>
                        <label class="form__label" for="email">e-mail</label>
                        <input class="form__input" type="text" name="email" id="email"><br>
                        <label class="form__label" for="message">nachricht</label>
                        <textarea class="form__input" type="text" name="message" id="message"></textarea><br>
                    <p class="form__text">Du hast die Datenschutzbestimmungen zur Kenntnis genommen.</p>
                    <p class="form__text">Du versprichst, dass du kein Roboter bist.</p>
                    <div class="form__captcha">CAPTCHA</div>
                    <button type="submit" value="submit">Senden</button>
                </form>
                </section>
            </div>

            <!-- Contact Panel -->
            <div class="container container--small">
                <section class="contact">
                    <div class=" panel contact__panel panel--primary">
                        <h2 class="panel__heading"><strong>Kontakt-Daten</strong></h2>
                        <ul class="panel__items">
                            <li class="panel__subitem">
                                <p class="panel__text--contact">e-mail:</p>
                                <a class="panel__link--contact" href="mailto: contact@mate-app.de">contact@mail-app.de</a>                
                            </li>
                            <li class="panel__subitem">
                                <p class="panel__text--contact">twitter:</p>
                                <a class="panel__link--contact" href="https://twitter.com/officialmateapp/">@officialmateapp</a>                
                            </li>
                            <li class="panel__subitem">
                                <p class="panel__text--contact">instagram:</p>
                                <a class="panel__link--contact" href="https://www.instagram.com/officialmateapp/">@officialmateapp</a>                
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </main>

        <?php include '../common/footer.php';?>

        <!-- Scripts -->
        <?php 
        // TODO: use Google Recaptcha v3 for verifying users
        ?>
        <script src="../js/main.js" type="text/javascript"></script>
	</body>
</html>