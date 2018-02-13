<?php
require 'bootstrap.php';
$cpanel = new CPANEL();
print $cpanel->header( "Traslada tu cuenta de correo" );
if ($emailsActive = Account::MailsActive()) {
    require 'views/index.view.php';
} else {
    require 'views/noemail.view.php';
}
echo $cpanel->footer();
$cpanel->end();
