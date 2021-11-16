<?php

class Prof extends Client

{

    public string $materie;

    public function __construct(string $cod_c, string $nume_c, string $c_imprumut,  $data_r, string $materie)
    {
        $this->cod_c = $cod_c;
        $this->nume_c = $nume_c;
        $this->c_imprumut = $c_imprumut;
        $this->data_r = $data_r;
        $this->materie = $materie;
    }




}