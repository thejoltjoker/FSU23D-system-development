<?php
session_start();

if (!isset($_SESSION['liked_movies'])) {
  $_SESSION['liked_movies'] = [];
};

$liked_movies = $_SESSION['liked_movies'];
$movie = $_POST["movie"];

if (isset($_POST['like']) && !in_array($movie, $liked_movies)) {
  $_SESSION['liked_movies'][] = $movie;
} else if (!isset($_POST['like']) && in_array($movie, $liked_movies)) {
  $_SESSION['liked_movies'] = array_diff($liked_movies, [$movie]);
};

header("Location: /");
exit();
