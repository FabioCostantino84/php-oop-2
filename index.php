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
    public $icon;

    public function __construct($name, $type, $description, $price, $image, Category $category, $icon)
    {
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->icon = $icon;
    }
}

class Category
{
    public $animals;

    public function __construct($animals)
    {
        $this->animals = $animals;
    }
}


$products = [
    new Product('lovedi', 'giochi', 'Palla Tpr con Punte Fucsia', 4.99, './img/lovedi_palla_fucsia.webp', new Category(['cani']), ''),
    new Product('mast', 'cucce', 'Brandina in alluminio blu', 29.99, './img/mast_brandina.webp', new Category(['cani']), ''),
    new Product('monge', 'cibo', 'Monge All Breeds Adult Salmone e Riso', 49.99, './img/monge_salmone_riso.webp', new Category(['cani']), ''),
    new Product('natural trainer', 'cibo', 'Natural Trainer Gatto Sterilised Salmone', 2.99, './img/natural_trainer_salmone.webp', new Category(['gatti']), ''),
    new Product('yes', 'giochi', 'Pallina Peluche Rosa', 1.99, './img/pallina_peluche_rosa.webp', new Category(['gatti']), ''),
    new Product('luna e teo', 'cucce', 'Cuccia Ciambella Pelosa Beige', 27.99, './img/ciambella_pelosa_beige.webp', new Category(['gatti']), ''),
];

$animalsType = [
    new Category(['cani']),
    new Category(['gatti']),
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Prodotti</h1>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4 mb-3">
                    <div class="card h-100 m-5">
                        <img src="<?php echo $product->image; ?>" class="card-img-top img-fluid p-5" alt="<?php echo $product->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase"><?php echo $product->name; ?></h5>
                            <p class="card-text"><strong>Tipo:</strong> <?php echo $product->type; ?></p>
                            <p class="card-text"><strong>Descrizione:</strong> <?php echo $product->description; ?></p>
                            <p class="card-text"><strong>Prezzo: €</strong><?php echo $product->price; ?></p>
                            <p class="card-text"><strong>Categoria:</strong> <?php echo $product->category->animals[0]; ?></p>
                            <?php if ($product->category->animals[0] === 'cani') : ?>
                                <i class="fas fa-dog"></i> <!-- Icona cane -->
                            <?php elseif ($product->category->animals[0] === 'gatti') : ?>
                                <i class="fas fa-cat"></i> <!-- Icona gatto -->
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>