<?php
class Habitation {
    private string $pays;
    private string $ville;
    private string $codepost;
    private int $chambres;
    private int $pieces;

    // Construct
    public function __construct($pays, $ville, $codepost, $chambres, $pieces ){
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setCodepost($codepost);
        $this->setChambres($chambres);
        $this->setPieces($pieces);
    }

    // Pays : get & set
    public function getPays(): string
    {
        return $this->pays;
    }

    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    // Ville : get & set
    public function getVille(): string
    {
        return $this->ville;
    }

    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    // Code postal : get & set
    public function getCodepost(): string
    {
        return $this->codepost;
    }

    public function setCodepost(string $codepost): void
    {
        $this->codepost = $codepost;
    }

    // Chambres : get & set
    public function getChambres(): int
    {
        return $this->chambres;
    }

    public function setChambres(int $chambres): void
    {
        $this->chambres = $chambres;
    }

    // Pieces : get & set
    public function getPieces(): int
    {
        return $this->pieces;
    }

    public function setPieces(int $pieces): void
    {
        $this->pieces = $pieces;
    }


}