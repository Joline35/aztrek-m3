<article>
    <a href="circuit.php?id=<?= $circuit ["id"]; ?>">
        <img src="uploads/<?= $circuit ["image"]; ?>" alt="<?= $circuit ["titre"]; ?>"
             class="img-responsive">
    </a>
    <h2><a href="recipe.php?id=<?= $circuit ["id"]; ?>"> <?= $circuit ["titre"]; ?></a></h2>
    <p> <?= $circuit ["description_courte"]; ?></p>

</article>