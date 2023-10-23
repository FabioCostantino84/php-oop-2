<?php

// Array che contiene una serie di oggetti "Product"
$products = [

    // Ogni prodotto viene creato grazie ai dati del costruttore della classe "Product"
    new Product('lovedi', 'giochi', 'Palla Tpr con Punte Fucsia', 4.99, './img/lovedi_palla_fucsia.webp', new Category(['cani']), ''),
    new Product('mast', 'cucce', 'Brandina in alluminio blu', 29.99, './img/mast_brandina.webp', new Category(['cani']), 'Disponibile'),
    new Product('monge', 'cibo', 'Monge All Breeds Adult Salmone e Riso', 49.99, './img/monge_salmone_riso.webp', new Category(['cani']), ''),
    new Product('natural trainer', 'cibo', 'Natural Trainer Gatto Sterilised Salmone', 2.99, './img/natural_trainer_salmone.webp', new Category(['gatti']), 'Disponibile'),
    new Product('yes', 'giochi', 'Pallina Peluche Rosa', 1.99, './img/pallina_peluche_rosa.webp', new Category(['gatti']), 'Disponibile'),
    new Product('luna e teo', 'cucce', 'Cuccia Ciambella Pelosa Beige', 27.99, './img/ciambella_pelosa_beige.webp', new Category(['gatti']), ''),
];

$animalsType = [
    new Category(['cani']),
    new Category(['gatti']),
];



?>