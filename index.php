<?php

// Classe
class Company{

    // Attributi
    public $name;
    public $location;
    public $tot_employees;
    public $spesaAnnuale;

    // Attributo statico

    public static $companies = [];

    // Metodi
    public function __construct($_name, $_location, $_tot_employees = 0, $_spesaAnnuale){

        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
        $this->spesaAnnuale = $_spesaAnnuale;


        self::$companies[] = $this;

    }

    public function dipendenti(){

        if($this->tot_employees > 0){

            echo "La società " . $this->name . " con sede in " . $this->location . " ha ben " . $this->tot_employees . " dipendenti.\n";

        }else{

            echo "La società " . $this->name . " con sede in " . $this->location . " non ha dipendenti.\n";

        }

    }

    public function spesaAnnuale(){

        echo "La spesa annuale della società " . $this->name . " è di " . $this->spesaAnnuale . " euro.\n";

    }

    public static function totaleSpese(){

        $totale = 0;

        foreach(self::$companies as $company) {
            $totale += $company->spesaAnnuale;
        }

        echo "La spesa totale annuale di tutte le società è di " . $totale . " euro.\n";

    }

}

$aulab = new Company('Aulab', 'Italia', 50, 1000);
$apple = new Company('Apple', 'USA', 137000, 100000000);
$stopGo = new Company('Stop&Go', 'Italia', 7, 50000);
$vW = new Company('Volkswagen', 'Germania', 671205, 32548963254);
$truffa = new Company('Truffa', 'Italia', 0, -45521255);

$aulab->dipendenti();
$apple->dipendenti();
$stopGo->dipendenti();
$vW->dipendenti();
$truffa->dipendenti();

$aulab->spesaAnnuale();
$apple->spesaAnnuale();
$stopGo->spesaAnnuale();
$vW->spesaAnnuale();
$truffa->spesaAnnuale();

Company::totaleSpese();

?>