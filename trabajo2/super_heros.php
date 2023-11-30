<?php
class SuperHero{

    protected $name;
    protected $abilities;
    protected $weakness;
    


    function __construct($name, $abilities, $weakness = null)
    {
        $this->name = $name;
        $this->abilities = $abilities;
        $this->weakness = $weakness;
    }

    function getName(){
        echo "Nombre: ". $this->name ."<br>";
    }

    function getAbilities(){

        echo "Habilidades: ";
        $abilitiesArray = $this->abilities;
        $abilitiesArraySize = count($abilitiesArray);
        foreach ($abilitiesArray as $position => $ability) {
    
            if($position === ($abilitiesArraySize -1)){
            
            echo $ability . ".<br>";

            } else {

                echo $ability . ", ";
            }
        }
    }

    function getWeakness(){
        echo "Debilidad: ". $this->weakness ."<br><br>";
    }


}


$superman = new SuperHero("Superman",["Super Fuerza","Vision Láser","Super Velocidad", "Vuelo"],"Kriptonita");
$superman->getName();
$superman->getAbilities();
$superman->getWeakness();

$batman = new SuperHero("Batman",["Detective Experto","Intelecto Superior","Maestro en Artes Marciales", "Experto en Estratega y tacticas", "Multimillonario"],"Traumas de la niñez");
$batman->getName();
$batman->getAbilities();
$batman->getWeakness();

$wonderWoman = new SuperHero("Mujer Maravilla",["Super Fuerza","Vuelo","Maestra en Artes Marciales", "Brazaletes Indestructibles", "Lazo de la Verdad"],"Armas de fuegos y armas blancas");
$wonderWoman->getName();
$wonderWoman->getAbilities();
$wonderWoman->getWeakness();

$flash = new SuperHero("Flash",["Super Velocidad","Curación Acelerada","Experto en Quimica", "Viajes en el tiempo", "intangibilidad"],"Superficies resbalosas");
$flash->getName();
$flash->getAbilities();
$flash->getWeakness();

$greenLantern = new SuperHero("Linterna Verde",["Anillo de poder","Vuelo","Escudo de Energia", "Generación de construcciones de luz dura.", "Experto en pilotear aviones"],"El color amarillo");
$greenLantern->getName();
$greenLantern->getAbilities();
$greenLantern->getWeakness();


?>