<?php

class Student extends Client
{

    public string $facultate;
    public string $an_studiu;



    public function __construct(string $cod_c, string $nume_c, string $c_imprumut,  $data_r, string $facultate, string $an_studiu)
    {
        $this->cod_c = $cod_c;
        $this->nume_c = $nume_c;
        $this->c_imprumut = $c_imprumut;
        $this->data_r = $data_r;
        $this->facultate = $facultate;
        $this->an_studiu = $an_studiu;
    }

    /*    function adauga_stud()
       {


          $studenti = array($student1,$student2);

           foreach($studenti as $student)
               if ($student->nume_c == $nume_c )

                   throw new Exception (' NumeDejaExistentException');


       }

   */
}