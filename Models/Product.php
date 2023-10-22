<?php

/* CREAZIONE DELLA CLASSE */
class Product
{
    // Variabili di istanza (queste rappresentano le caratteristiche di un prodotto).
    // Queste sono public, quindi si può accedere dall'esterno della classe.
    public $name;
    public $type;
    public $description;
    public $price;
    public $image;
    public $category;
    /* public $icon; */


    /* COSTRUTTORE DELLA CLASSE */

    // Quando si crea un nuovo oggetto, in questo caso "Product", il costruttore prende i dati necessari per creare un nuovo prodotto.
    public function __construct($name, $type, $description, $price, $image, Category $category, /* $icon */)
    {
        //  I dati vengono assegnati alle proprietà dell'oggetto Product utilizzando la sintassi $this->proprietà = variabile.
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        /* $this->icon = $icon; */
    }
}

?>