<?php

namespace App;

class Performance
{
    static public int $minMark = 3;
    static public function avg(array $marks):float
    {
        return array_sum($marks) / count($marks);
    }

    static function getMin()
    {
        return self::$minMark;
    }
}