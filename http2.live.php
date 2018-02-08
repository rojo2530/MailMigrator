<?php
include("/usr/local/cpanel/php/cpanel.php");
$cpanel = new CPANEL();
print $cpanel->header( "Traslada tu cuenta de correo" );
require 'views/index.view.php';
echo $cpanel->footer();
$cpanel->end();
