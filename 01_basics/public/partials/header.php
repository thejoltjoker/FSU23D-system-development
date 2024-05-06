<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.15.0/cdn/themes/light.css" />
  <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.15.0/cdn/shoelace-autoloader.js"></script>
</head>

<body class="max-w-screen-lg mx-auto">
  <nav class="flex text-lg py-2">
    <h1>My Site</h1>
    <ul class="ml-auto flex gap-2">
      <?php
      if (isset($_GET["logged-in"]) && $_GET["logged-in"] == "1") {
      ?>
        <li>
          <a href="/?logged-in=0">Log out</a>
        </li>

      <?php
      } else {
      ?>
        <li>
          <a href="/?logged-in=1">Log in</a>
        </li>
      <?php
      };
      ?>
    </ul>
  </nav>