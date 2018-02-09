<?php
include("/usr/local/cpanel/php/cpanel.php");
require 'functions.php';
$cpanel = new CPANEL();
print $cpanel->header( "Traslada tu cuenta de correo" );
if ($emailsActive = getAllEmail($cpanel)) {
    require 'views/index.view.php';
} else {
    require 'views/noemail.view.php';
}
echo $cpanel->footer();
$cpanel->end();
