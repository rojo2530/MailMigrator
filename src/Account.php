<?php
class Account
{
    public static function MailsActive(Cpanel $cpanel)
    {
        $emails = $cpanel->uapi('Email', 'list_pops')["cpanelresult"]["result"]["data"];
        $emailsActive = [];
        for ($i = 0; $i < count($emails) -1; $i++) {
            if (self::isActiveEmail($emails[$i])) {
                $emailsActive[] = $emails[$i]["email"];
            }
        }
        return $emailsActive;
    }
    protected static function isActiveEmail($email)
    {
        return $email["suspended_login"] == 0 &&
               $email["suspended_incoming"] == 0;
    }
    protected static function spaceFree(Cpanel $cpanel)
    {
        return $cpanel->uapi('Quota', 'get_quota_info')["cpanelresult"]["result"]["data"]["megabytes_remain"];

    }
}