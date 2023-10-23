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
    public $available;

    use message;

    /* public $icon; */


    /* COSTRUTTORE DELLA CLASSE */

    // Quando si crea un nuovo oggetto, in questo caso "Product", il costruttore prende i dati necessari per creare un nuovo prodotto.
    public function __construct($name, $type, $description, $price, $image, Category $category, $available/* $icon */)
    {
        //  I dati vengono assegnati alle proprietà dell'oggetto Product utilizzando la sintassi $this->proprietà = variabile.
        $this->setName($name);
        $this->setType($type);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setImage($image);
        $this->setCategory($category);
        $this->setAvailable($available);
        /* $this->icon = $icon; */
    }

    /* METODO SETTER/GETTER */

    // I metodi set e get migliorano la modularità, la manutenibilità e la sicurezza del codice.

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    public function getAvailable()
    {
        return $this->available;
    }
};

trait message {
    public function notAvailable() {
        echo "Non disponibile";
    }
};
