<?php include_once("./partials/header.php") ?>
<?php include_once("./src/movies.php") ?>
<main class="flex justify-center grow">

  <ul>

    <?php
    foreach ($movies as $movie) {

      if (isset($_SESSION["liked_movies"]) && in_array($movie, $_SESSION['liked_movies'])) {
        $isLiked = true;
      } else {
        $isLiked = false;
      }

      include("./partials/list_item.php");
    };
    ?>
  </ul>

</main>
<?php include_once("./partials/footer.php") ?>