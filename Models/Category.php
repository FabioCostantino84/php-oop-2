<?php

/* CREAZIONE DI UNA SECONDA CLASSE */

// Classe figlia di "Product"
class Category
{
    public $animals;

    public function __construct($animals)
    {
        $this->animals = $animals;
    }
}

?>