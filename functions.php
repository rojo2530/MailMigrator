<?php
function dd($variable) {
    echo '<pre>';
    die(var_dump($variable));
    echo '</pre>';
}
function getAllEmail(Cpanel $cpanel) {
    $emails = $cpanel->uapi('Email', 'list_pops')["cpanelresult"]["result"]["data"];
    $emailsActive = [];
    for ($i = 0; $i < count($emails) -1; $i++) {
        if (isActiveEmail($emails[$i])) {
            $emailsActive[] = $emails[$i]["email"];
         }
    }
    return $emailsActive;
}
function isActiveEmail(Array $email = []) {
    return $email["suspended_login"] == 0 &&
           $email["suspended_incoming"] == 0;
}
function hostname($cpanel)
{
    return $cpanel->cpanelprint('$hostname');
}

