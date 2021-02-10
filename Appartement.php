<?php
class Appartement extends Habitation {
    private bool $garage;

    public function __construct($pays, $ville, $codepost, $chambres, $pieces, $garage)
    {
        parent::__construct($pays, $ville, $codepost, $chambres, $pieces);
        $this->setGarage($garage);
    }

    // Garage : set & get
    public function isGarage(): bool
    {
        return $this->garage;
    }

    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }



}