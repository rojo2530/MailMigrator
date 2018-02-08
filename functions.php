<?php
function dd($variable) {
    echo '<pre>';
    die(var_dump($variable));
    echo '</pre>';
}
function getAllEmail($cpanel) {
    return $cpanel->uapi('Email', 'list_pops')["cpanelresult"]["result"]["data"];

    //$emailsValid = [];
    //return $emails["cpanelresult"]["result"]["data"];

}
