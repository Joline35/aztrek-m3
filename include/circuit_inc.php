<article>
    <a href="circuit.php?id=<?= $circuit ["id"]; ?>">
        <img src="uploads/<?= $circuit ["image"]; ?>" alt="<?= $circuit ["titre"]; ?>"
             class="img-responsive">
    </a>
    <h2><a href="circuit.php?id=<?= $circuit ["id"]; ?>"> <?= $circuit ["titre"]; ?></a></h2>
    <p> <?= $circuit ["description_courte"]; ?></p>

    <p>

        <?php  $difficulte = 2; ?>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php  if ($i <= $difficulte) : ?>
                <i class="fa fa-star"></i>
            <?php else: ?>
                <i class="fa fa-star-o"></i>
            <?php endif; ?>
        <?php endfor; ?>


    </p>

</article>