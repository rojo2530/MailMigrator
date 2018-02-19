<?php
require '/usr/local/cpanel/base/frontend/paper_lantern/http2/bootstrap.php';
$emailDst = $_POST["migration->emailDst"];
$cpanel = new CPANEL();
if ( ! in_array($emailDst, Account::MailsActive())) {
    //Aquí devolvemos resultado de false, y mostramos en javascript mensaje de error que el email no pertenece a la cuenta de correo
}
