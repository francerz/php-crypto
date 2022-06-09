<?php

namespace Francerz\Crypto;

class RandomString
{
    public static function generate($length = 64)
    {
        return random_bytes($length);
    }

    public static function generateHex($length = 64)
    {
        $string = random_bytes(ceil($length / 2));
        $hex = bin2hex($string);
        return substr($hex, 0, $length);
    }

    public static function generateBase64($length = 64)
    {
        $string = random_bytes(ceil($length * 3 / 4));
        $base64 = rtrim(base64_encode($string), '=');
        return substr($base64, 0, $length);
    }

    /**
     * Generates a Random String encoded as url safe base64.
     *
     * @param integer $length
     * @return string
     */
    public static function generateUrlSafe($length = 64)
    {
        $base64 = static::generateBase64($length);
        return strtr($base64, '+/', '-_');
    }
}
