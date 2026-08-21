<?php

class Lasagna
{
    public function expectedCookTime()
    {
        return 40;
    }

    public function remainingCookTime($minutesInOven)
    {
        return $this->expectedCookTime() - $minutesInOven;
    }

    public function totalPreparationTime($layers)
    {
        return $layers * 2;
    }

    public function totalElapsedTime($layers, $minutesInOven)
    {
        return $this->totalPreparationTime($layers) + $minutesInOven;
    }

    public function alarm()
{
    return "Ding!";
}
}