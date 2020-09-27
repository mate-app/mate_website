<?php

switch ($_SERVER['SCRIPT_NAME']) {
    case '/about.php':   
        $TITLE = 'mate - Über Uns';
        break;
    case '/privacy.php':   
        $TITLE = 'mate - Datenschutz';
        break;
    case '/press.php':   
        $TITLE = 'mate - Presse';
        break;
    case '/imprint.php':   
        $TITLE = 'mate - Impressum';
        break;
    case '/news.php':   
        $TITLE = 'mate - News';
        break;
    case '/contact.php':   
        $TITLE = 'mate - Kontakt';
        break;
    default:
        $TITLE = 'mate - a personal studdybuddy';
        break;
}
?>