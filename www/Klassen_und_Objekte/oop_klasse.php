<?php
//Definition der Klasse Fahrzeug
class Fahrzeug
{
    //Eigenschaft
    private $geschwindigkeit = 0; 

    //Methode
    function beschleunigen($wert)
    {
        $this ->geschwindigkeit += $wert;
    }

    //Methode
    function ausgabe()
    {
        echo "Geschwindigkeit: $this->geschwindigkeit<br>";
    }
}

//Objekte der Klasse Fahrzeuge erzeugen
$vespa = new Fahrzeug();
$scania = new Fahrzeug();

//Typ prüfen
if (is_object($vespa))
    echo "Das ist ein Objekt <br>";

//Erstes Objekt betrachten beziehungsweise verändern
$vespa->ausgabe();
$vespa->beschleunigen(20);
$vespa->ausgabe();

//Zweites Objekt betrachten
$scania->ausgabe();

//Private Eigenschaft nicht erreichbar
echo "Private Eigenschaft: $scania->geschwindigkeit";
?>