<?php

require 'Carte.php';
require 'Client.php';
require 'Student.php';
require 'Prof.php';




$carte1 = new Carte ('1','carte1','Petre','razboi', '250', false);
$carte2 = new Carte ('2','carte2','Marius','aventura', '300', true);
$carte3 = new Carte ('3','carte3','Otilia','Sci-Fi', '400', true);
$carte4 = new Carte ('4','carte4','Anton','politist', '350', false);

$student1 = new Student ( '101', 'Alex', 2, '25/11/2021', 'ETTI', '3');
$student2 = new Student ('102', 'Matei', 5, '14/11/2021' ,'Automatica', '2');
$student3 = new Student ( '103', 'Andrei', 20, '28/11/2021', 'FILS', '4');
$student4 = new Student ('104', 'Andreea', 4, '11/11/2021', 'Energetica', '1');


$prof1 = new Prof ('501', 'Stanomir', '200', '12/11/2021', 'SS');
$prof2 = new Prof ('502', 'Grigore', '1', '14/11/2021', 'POO');
$prof3 = new Prof ('503', 'Burileanu', '65', '21/11/2021', 'AMP');
$prof4 = new Prof ('504', 'Enachescu', '15', '20/11/2021', 'VLSI');

$carti = array($carte1, $carte2, $carte3, $carte4);
$studenti = array($student1,$student2, $student3, $student4);
$profi = array($prof1, $prof2, $prof3, $prof4);

$clienti123 = array($studenti, $profi);
$clienti = array($student1,$student2, $student3, $student4,$prof1, $prof2, $prof3, $prof4 );




foreach ($clienti as $client) // afisare toti clientii - exemplu cu foreach
{
    print_r($client);

}

foreach ($studenti as $student) // afisare toti studentii
{
    print_r($student);
}

$arrlength = count ($carti);  // afisare toate cartile - exemplu cu for si arrlength
for($x = 0; $x < $arrlength; $x++)
{
    print_r($carti[$x]) ;

}

foreach ($profi as $prof) // afisar toti profesorii
{
    print_r($prof);

}



function afiseazaCartiDisponibile() // functie afisare carti disponibile
{

    $carte1 = new Carte ('1','carte1','Petre','razboi', '250', false);
    $carte2 = new Carte ('2','carte2','Marius','aventura', '300', true);
    $carte3 = new Carte ('3','carte3','Otilia','Sci-Fi', '400', true);
    $carte4 = new Carte ('4','carte4','Anton','politist', '350', false);

    $carti = array($carte1, $carte2, $carte3, $carte4);



    foreach ($carti as $carte) {
        if ($carte->disp == true) {     //daca este disponibila cartea
            print_r($carte);
        }

    }
}


afiseazaCartiDisponibile();


foreach ($carti as $carte) {  //detalii carti

    echo 'Detaliile cartilor sunt: Titlu: '. $carte->titlu. ', Autor: '. $carte->autor. ', Gen: '. $carte->gen. '. ';

}

foreach ($carti as $carte) {   //filtrare carti dupa gen
    if ($carte->gen == 'Sci-Fi') {
        print_r($carte);
    }

}











 $client =  $clienti[0] ;



for($x = 1; $x < count ($clienti); $x++) // cel mai fidel client - for
{
    if( $clienti[$x]->c_imprumut > $client->c_imprumut)
    {
        $client = $clienti[$x];
    }
}

print_r( $client);






foreach ($clienti as $value) // cel mai fidel client - foreach
{

    if( $value->c_imprumut > $client->c_imprumut )
    {
        $client = $value;
    }



}

print_r($client);




foreach ($clienti as $value) // verificare depasire data depunere carte
{

    if( '15/11/2021' > $value->data_r )
    {
        print_r('Clientul '.$value->nume_c. ' a depasit data de returnare a cartii. ');
    }



}

