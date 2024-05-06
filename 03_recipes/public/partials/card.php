<sl-card class="card-overview basis-64 grow shrink">
  <h3 class="font-bold"><?php echo ($recipe['title']); ?></h3>
  <p class="text-gray-500 pt-2 text-sm flex items-center gap-1"><sl-icon name="stopwatch"></sl-icon><?php echo ($recipe['total_time']); ?></p>

  <div slot="footer" class="flex items-center justify-between">
    <sl-button variant="primary" pill href="http://localhost:8080/recipe.php?slug=<?php echo ($recipe['slug']); ?>">More Info</sl-button>
    <p class="text-gray-500 text-sm"><?php echo ($recipe['difficulty']); ?></p>
  </div>
</sl-card>