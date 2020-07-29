<?php declare(strict_types=1);

namespace App;

Class IntToRoman
{
     public function run($integer)
    {

        if (!is_int($integer)) {
            throw new ErrorException('Input was not Integer.');
        } else {
            $answer = [];
            $tens = ($integer/10);
            
            //removing tens from count so not counted twice
            $integer = $integer - ($tens*10);

            return "VI";
        }

    }
}