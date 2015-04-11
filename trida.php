<?php

/**
 * Php třída pro matematické operace. S požností vypsání historie
 *
 * @author DolbyCz
 * @license free
 * @author Dominik Hrabík <dom96@email.cz>
 * @example priklad.php
 * @package WAP & SI
 * @version 1.0
 */
class matika {
    
    /**
     * Uchovává konečný výsledek výpočtů.
     * @var int 
     */
    var $vysledek;
    
    /**
     * Uchovává historii výpočtů.
     * @var array 
     */
    var $historie = array();

    /**
     * Konstruktor třídy
     * @param int $cislo
     */
    function __construct($cislo) {
        $this->vysledek = $cislo;
        $this->historie[] = "Zadáno první číslo: " . $cislo;
    }

    /**
     * Funkce která přičte číslo k číslu které je jako výsledek.
     * @param int $cislo
     */
    function pricti($cislo) {
        $this->historie[] = "Číslo: " . $cislo . " přičteno k: " . $this->vysledek;
        $this->vysledek = $this->vysledek + $cislo;
    }

    /**
     * Funkce která odečte číslo k číslu které je jako výsledek.
     * @param int $cislo
     */
    function odecti($cislo) {
        $this->historie[] = "Číslo : " . $cislo . " odečteno od: " . $this->vysledek;
        $this->vysledek = $this->vysledek - $cislo;
    }

    /**
     * Funkce která vynásobí výsledek číslem.
     * @param int $cislo
     */
    function znasob($cislo) {
        $this->historie[] = "Číslo : " . $cislo . " vynásobeno s: " . $this->vysledek;
        $this->vysledek = $this->vysledek * $cislo;
    }

    /**
     * Funkce která vydělí výsledek číslem.
     * @param int $cislo
     */
    function vydel($cislo) {
        $this->historie[] = "Číslo: " . $this->vysledek . " vyděleno číslem: " . $cislo;
        $this->vysledek = $this->vysledek / $cislo;
    }

    /**
     * Funkce která umocní výsledek číselm.
     * @param int $cislo
     */
    function mocnia($cislo) {
        $this->historie[] = "Číslo: " . $this->vysledek . " umocněno číslem: " . $cislo;
        $this->vysledek = pow($this->vysledek, $cislo);
    }

    /**
     * Funkce která odmocní výsledek číslem.
     * @param int $cislo
     */
    function odmocnina($cislo) {
        $this->historie[] = "Číslo: " . $this->vysledek . " odmocněno číslem: " . $cislo;
        $this->vysledek = pow($this->vysledek, 1 / $cislo);
    }

    /**
     * Funkce která vrátí historii výpočtů do seznamu.
     * @return string
     */
    function vypis_histori() {
        $vrat = "<ul>";
        foreach ($this->historie as $hist) {
            $vrat .= "<li>";
            $vrat .= $hist;
            $vrat .= "</li>";
        }
        $vrat .= "<ul>";;
        return $vrat;
    }

    /**
     * Funkce která vrátí konečný výsledek.
     * @return string
     */
    function __toString() {
        return strval($this->vysledek);
    }

}
