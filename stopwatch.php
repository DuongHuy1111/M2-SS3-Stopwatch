<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function getStarTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function start($startTime)
    {
        $this->startTime = $startTime;
    }

    public function stop($endTime)
    {
        $this->endTime = $endTime;
    }

    public function getElapsedTime()
    {
        return (($this->getEndTime() - $this->getStarTime()) * 1000);
    }
}

?>
