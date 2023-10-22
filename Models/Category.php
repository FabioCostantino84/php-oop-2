<?php

/* CREAZIONE DI UNA SECONDA CLASSE */

// Classe figlia di "Product"
class Category
{
    public $animals;

    public function __construct($animals)
    {
        $this->setAnimals($animals);
    }

    /* METODO SETTER/GETTER */

    // I metodi set e get migliorano la modularità, la manutenibilità e la sicurezza del codice.

    public function setAnimals($animals)
    {
        $this->animals = $animals;
    }

    public function getAnimals()
    {
        return $this->animals;
    }
}
