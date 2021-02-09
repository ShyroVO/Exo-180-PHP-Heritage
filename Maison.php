<?php
class Maison extends Habitation {
    private bool $jardin;
    private int $etage;
    private bool $garage;

    /**
     * @return bool
     */
    public function isJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return int
     */
    public function getEtage(): int
    {
        return $this->etage;
    }

    /**
     * @param int $etage
     */
    public function setEtage(int $etage): void
    {
        $this->etage = $etage;
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }



}