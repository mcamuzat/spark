<?php
namespace Spark;

class Spark
{

    private static $bars = array('▁','▂','▃','▄','▅','▆','▇','█');
    /**
     *
     */
    public static function spark($array)
    {
        $divide = max($array);

        if ($divide == 0) {
            $divide = 1;
        }
        $countTick = count(self::$bars)-1;
        $out = '';
        foreach ($array as $tick) {
            $out .= self::$bars[round(($tick / $divide) * $countTick)];
        }
        return $out;
    }
}
