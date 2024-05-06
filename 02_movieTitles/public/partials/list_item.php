<li class="flex justify-between gap-2 items-center py-2 border-b border-gray-200">
  <p><?php echo ($movie) ?></p>

  <form class="h-full flex items-center" method="POST" action="/like.php" class="">
    <input type="checkbox" name="like" <?php if (!$isLiked) { ?>checked<?php }; ?> class="hidden">
    <input name="movie" class="hidden" value="<?php echo ($movie); ?>">
    <sl-button variant="<?php if ($isLiked) { ?>danger<?php }; ?>" size="small" circle type="submit">
      <sl-icon name="heart" label="Heart"></sl-icon>
    </sl-button>
  </form>

</li>