<article>
    <a href="recipe.php?id=<?= $recipe ["id"]; ?>">
        <img src="uploads/<?= $recipe ["image"]; ?>" alt="<?= $recipe ["titre"]; ?>"
             class="img-responsive">
    </a>
    <h2><a href="recipe.php?id=<?= $recipe ["id"]; ?>"> <?= $recipe ["titre"]; ?></a></h2>
    <p> <?= $recipe ["description_courte"]; ?></p>
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



    <footer>
        <div class="label"><a href="#" class="like"><i
                    class="fa fa-heart"></i></a> <?= $recipe ["nb_likes"]; ?></div>
        <div class="label"><i class="fa fa-cutlery"></i><?= $recipe ["categorie"]; ?></div>
        <div class="label"><i class="fa fa-user"></i><?= $recipe ["pseudo"]; ?></div>
        <div class="label"><i
                class="fa fa-calendar"></i><?= $recipe ["date_creation_format"]; ?>
        </div>
    </footer>
</article>