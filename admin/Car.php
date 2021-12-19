<?php

class Car
{
    public string $spalva;
    public string $greitis;
    public string $dureles;

    public function vaziuoti(): void
    {
        echo "Automobilis vaziuoja" . $this->greitis . "greiciu";
    }

    public function gautiSpalva(): string
    {
        return $this->spalva;
    }
    public function dureles(): void
    {
        echo "Atomobilio dureliu skaicius" .$this->dureles;
    }
}