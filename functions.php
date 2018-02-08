<?php
function dd($variable) {
    echo '<pre>';
    die(var_dump($variable));
    echo '</pre>';
}
function getAllEmail($cpanel) {
    $emails = $cpanel->uapi('Email', 'list_pops')["cpanelresult"]["result"]["data"];
    $emailsValid = [];
    for ($i = 0; $i < count($emails) -1; $i++) {
        if ($emails[$i]["suspended_login"] == 0 && $emails[$i]["suspended_incoming"] == 0) {
            $emailsValid[] = $emails[$i]["email"];
         }
    }
    return $emailsValid;
}
