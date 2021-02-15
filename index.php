<!-- php-oop-1
Istruzioni
Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza.
Per chi non ha fantasia ecco qualche entitá che potete usare
Animale, Persona, Casa, Computer, Hotel, Film, Videogioco, Sport, Bicicletta, Veicolo, Nazione etc. -->
<?php

/** Animali class
 * @author Erion erion@hotmail.it
 * @copyright 2021 Erion
 */

class Animali {
    public $specie;
    public $famiglia;
    public $habitat;
    public $colore;

    public function __construct(string $specie, string $famiglia, string $habitat, string $colore) {
        $this->specie = $specie;
        $this->famiglia = $famiglia;
        $this->habitat = $habitat;
        $this->colore = $colore;
    }

    public function getSpecie(){
        return $this->specie;
    }
}

$leone = new Animali('leone', 'felidi', 'savana', 'giallo chiaro');
$cane = new Animali('cane', 'canidi', 'casa', 'grigio chiaro');
$pantera = new Animali('pantera', 'felidi', 'foreste pluviali tropicali', 'nero scuro');
$lupo = new Animali('lupo', 'canide lupino', 'le foreste e la tundra del Artide', 'grigiastro');

var_dump($leone, $cane, $pantera, $lupo);
var_dump($leone->getSpecie());
/** Persona class
 * @author Erion erion@hotmail.it
 * @copyright 2021 Erion
*/
class Persona{
    public $nome;
    public $cognome;
    public $anni;
    public $cell;
    public $citta;

    public function __construct(string $nome, string $cognome, int $anni, string $cell, string $citta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->anni = $anni;
        $this->cell = $cell;
        $this->citta = $citta;
    }

    public function getName(){
        return $this->nome;
    }

    public function getAge(){
        return $this->anni;
    }
}

$andrea = new Persona('Andrea', 'Rossi', 25, '3298564570', 'Roma');
$marco = new Persona('Marco', 'Bianchi', 26, '3270985564', 'Milano');
$giovanni = new Persona('Giovanni', 'Verdi', 28, '3257096854', 'Bologna');
var_dump($andrea, $marco, $giovanni);
var_dump($marco->getName(), $marco->getAge());