<!-- 

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

 L'e-commerce vende prodotti per animali.

 I prodotti sono categorizzati, le categorie sono Cani o Gatti.

 I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.

 -->

<?php

class Product
{
    public $name;
    public $type;
    public $description;
    public $price;
    public $image;
    public $category;

    public function __construct($name, $type, $description, $price, $image, $category)
    {
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
}

$products = [
    new Product('monge', 'cibo','Monge All Breeds Adult Salmone e Riso', '49,99', 'monge_salmone_riso', 'cani'),
    new Product('natural tarainer', 'cibo', 'Natural Trainer Gatto Sterilised Salmone', '2,99', 'natural_trainer_salmone', 'gatti'),
]







?>