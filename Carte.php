<?php

class Carte
{
    public string $cod_unic;
    public string $titlu;
    public string $autor;
    public string $gen;
    public string $nrpag;
    public bool $disp; //disponibila

    public function __construct(string $cod_unic, string $titlu, string $autor,string  $gen, string  $nrpag,bool $disp)
    {

        $this->cod_unic = $cod_unic;
        $this->titlu = $titlu;
        $this->autor = $autor;
        $this->gen = $gen;
        $this->nrpag = $nrpag;
        $this->disp = $disp;

        //echo $this->disp;
    }

}