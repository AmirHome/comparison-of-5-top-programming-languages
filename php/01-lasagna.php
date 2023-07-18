<?php

declare(strict_types=1);

class Lasagna
{

    const PREPARATION_PER_LAYER = 2;

    public function expectedCookTime(){
        return 40;
    }

    public function remainingCookTime($elapsed_minutes){
        return $this->expectedCookTime() - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep){
        return $layers_to_prep * self::PREPARATION_PER_LAYER;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes){
        return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    public function alarm(){
        return 'Ding!';
    }
}
