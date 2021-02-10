<?php
class Maison extends Habitation {
    private bool $jardin;
    private int $etage;
    private bool $garage;

    // Construct
    public function __construct($pays, $ville, $codepost, $chambres, $pieces, $jardin, $etage, $garage)
    {
        parent::__construct($pays, $ville, $codepost, $chambres, $pieces);
        $this->setJardin($jardin);
        $this->setEtage($etage);
        $this->setGarage($garage);
    }

    // Jardin : get & set
    public function isJardin(): bool
    {
        return $this->jardin;
    }

    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    // Etage : get & set
    public function getEtage(): int
    {
        return $this->etage;
    }

    public function setEtage(int $etage): void
    {
        $this->etage = $etage;
    }

    // Garage : get & set
    public function isGarage(): bool
    {
        return $this->garage;
    }

    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }



}