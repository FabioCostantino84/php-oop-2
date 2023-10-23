<div class="card h-100 m-5">
    <img src="<?php echo $product->image; ?>" class="card-img-top img-fluid p-5" alt="<?php echo $product->name; ?>">
    <div class="card-body">

        <!-- aggiunto il TRAIT msg() !!! usarlo con un senso logico -->
        <!-- <h5 class="card-title text-uppercase"><?php echo $product->notAvailable(); ?></h5> -->

        <!-- RIPRISTINARLO UNA VOLTA AGGIUSTATO IL TRAIT -->
        <h5 class="card-title text-uppercase"><?php echo $product->name; ?></h5>
        <p class="card-text"><strong>Tipo:</strong> <?php echo $product->type; ?></p>
        <p class="card-text"><strong>Descrizione:</strong> <?php echo $product->description; ?></p>
        <p class="card-text"><strong>Prezzo: €</strong><?php echo $product->price; ?></p>
        <p class="card-text"><strong>Disponibiltà: </strong><?php echo $product->available ? : $product->notAvailable(); ?></p>
        <p class="card-text"><strong>Categoria:</strong> <?php echo $product->category->animals[0]; ?></p>

        <!-- Con questa condizione if elseif controlla la categoria così da associare un'icona. Con animals[0] diciamo di partire dal primo elemento dell'array  -->
        <?php if ($product->category->animals[0] === 'cani') : ?>
            <i class="fas fa-dog"></i>
        <?php elseif ($product->category->animals[0] === 'gatti') : ?>
            <i class="fas fa-cat"></i>
        <?php endif; ?>

    </div>
</div>