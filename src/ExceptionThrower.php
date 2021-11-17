<?php

namespace DayGarcia\AmazonSPApiLaravel;

class ExceptionThrower
{
    public static function throwIf($exceptionType, $condition, $message)
    {
        if ($condition) {
            throw new $exceptionType($message);
        }
    }
}
