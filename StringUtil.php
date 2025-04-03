<?php

class StringUtil
{
    public static function encodeUTF8($string)
    {
        return mb_convert_encoding($string, "ISO-8859-1", "UTF-8");
    }
}
