<?php

namespace Nicedo\Core\Helpers;

use Bitrix\Main\PhoneNumber\Parser;
use Bitrix\Main\PhoneNumber\PhoneNumber;

class Phone
{
    public static function getParser($phoneNumber): PhoneNumber
    {
        return Parser::getInstance()->parse($phoneNumber);
    }

    public static function validate($phoneNumber)
    {
        $phoneNumber = self::format($phoneNumber);
        return Parser::getInstance()->parse($phoneNumber)->isValid();
    }

    public static function getFormatPhone($phone, $format = false): string
    {
        $clearPhone = preg_replace('/[^0-9]/', '', $phone);

        if ($format) {
            if (strlen($clearPhone) === 11) {
                $clearPhone = substr($clearPhone, 1);
                $formatPhone = 8 . ' (' . $clearPhone[0] . $clearPhone[1] . $clearPhone[2] . ') ' . $clearPhone[3] . $clearPhone[4] . $clearPhone[5] . '-' . $clearPhone[6] . $clearPhone[7] . '-' . $clearPhone[8] . $clearPhone[9];
            }
        }

        return $formatPhone ?? $clearPhone;
    }

}