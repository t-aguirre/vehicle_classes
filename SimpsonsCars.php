<?php

class SimpsonsCars
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $fuelType;
    private int $fuelQuantity;

    public function __construct(string $color, int $nbSeats, string $fuelType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $fuelType;
        // var_dump($this);
    }

    // Démarrage
    public function start(): string
    {
        $this->currentSpeed = 10;
        return "The car have started!";
    }

    //Déplacement
    public function forward(): string
    {
        $this->currentSpeed;
        return "Gooo!";
    }

    //Freinage
    public function brake(): string
    {
        $sentence = " ";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake!!!";
        }
        $sentence .= " I'm stopped !";
        return $sentence;
    }

    //Getters and Setters
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): string
    {
        return $this->nbSeats;
    }

    public function setNbSeats($nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->nbSeats;
    }

    public function setEnergy($nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function setFuelType($fuelType): void
    {
        $this->fuelType = $fuelType;
    }

    public function getFuelQuantity(): string
    {
        return $this->fuelQuantity;
    }

    public function setFuelQuantity($fuelQuantity): void
    {
        $this->fuelQuantity = $fuelQuantity;
    }
}
