<?php

class Car
{
    public string $spalva;
    public string $greitis;

    public function vaziuoti(): void
    {
        echo "Automobilis vaziuoja" . $this->greitis . "greiciu";
    }

    public function gautiSpalva(): string
    {
        return $this->spalva;
    }

}