<?php include_once("./partials/header.php") ?>
<?php
include_once('./src/recipes.php');
$slug = $_GET["slug"];
?>
<main class="">
  <?php
  foreach ($recipes as $recipe) {
    if ($recipe['slug'] === $slug) { ?>
      <h1 class="text-4xl font-bold pt-8"><?php echo ($recipe['title']); ?></h1>
      <h3 class="py-2 text-gray-400"><?php echo ($recipe['total_time']); ?></h3>
      <div class="flex gap-4">
        <aside class="basis-64 grow shrink border rounded-lg border-gray-300 p-4">
          <h4 class="font-bold">Ingredients</h4>
          <sl-divider></sl-divider>
          <ul class="">
            <?php
            foreach ($recipe['ingredients'] as $ingredient) {
            ?>
              <li>
                <?php echo ($ingredient); ?>
              </li>
            <?php
            }
            ?>
          </ul>
        </aside>
        <div class="grow shrink">
          <p class="whitespace-pre-line"><?php echo ($recipe['instructions']); ?></p>
        </div>
      </div>
  <?php
    }
  };
  ?>
</main>
<?php include_once("./partials/footer.php") ?>