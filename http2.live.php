<?php
require 'bootstrap.php';

$cpanel = new CPANEL();
print $cpanel->header( "Traslada tu cuenta de correo" );
$accountName = Account::name($cpanel);
//dd(hostname($cpanel));
if ($emailsActive = Account::MailsActive($cpanel)) {
    require 'views/index.view.live.php';
} else {
    require 'views/noemail.view.php';
}
echo $cpanel->footer();
$cpanel->end();
