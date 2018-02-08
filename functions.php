<?php
function dd($variable) {
    echo '<pre>';
    die(var_dump($variable));
    echo '</pre>';
}
function getAllEmail($cpanel) {
    $emails = $cpanel->uapi('Email', 'list_pops')["cpanelresult"]["result"]["data"];
    //$emailsValid = [];
    for ($i = 0; $i < count($emails) -1; $i++) {
        if (isActiveEmail($emails[$i])) {
            $emailsValid[] = $emails[$i]["email"];
         }
    }
    return $emailsValid;
}
function isActiveEmail($email) {
    return $email["suspended_login"] == 0 &&
           $email["suspended_incoming"] == 0;
}
