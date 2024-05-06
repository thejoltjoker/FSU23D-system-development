<?php include_once("./partials/header.php") ?>
<?php include_once("./src/recipes.php") ?>
<main class="">
  <h1 class="text-2xl font-bold py-8">My recipes</h1>
  <div class="flex flex-wrap gap-4">
    <?php
    foreach ($recipes as $recipe) {
      include("./partials/card.php");
    };
    ?>

  </div>
</main>
<?php include_once("./partials/footer.php") ?>