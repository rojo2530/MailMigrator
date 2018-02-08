<?php
function dd($variable) {
    echo '<pre>';
    die(var_dump($variable));
    echo '</pre>';
}
function getAllEmail($cpanel) {
    $emails = $cpanel->uapi('Email', 'list_pops');
    return $emails["cpanelresult"]["result"];
}
