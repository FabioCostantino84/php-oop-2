<div class="container mt-5">
    <h1>Prodotti</h1>
    <div class="row">

        <!-- Con foreach iteriamo attraverso l'array $products, che contiene oggetti Product, e per ciascun oggetto, creiamo una scheda per il prodotto -->
        <?php foreach ($products as $product) : ?>
            <div class="col-md-4 mb-3">


                <?php include __DIR__ . '/Partials/card.php' ?>


            </div>
        <?php endforeach; ?>
    </div>
</div>