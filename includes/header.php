<?php
session_start();
require_once("html.php");

?>


<?php html::doctype(); ?>
<html lang="en">
  <?php html::head(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <meta name="theme-color" content="#712cf9">
    <title>Carousel Template · Bootstrap v5.2</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css " rel="stylesheet">
  <?php html::head(false); ?>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand" href="">auth sys</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://auth_2024.test">Home</a>
            </li>
            <?php 
            if (!isset($_SESSION["username"])): 
            ?>
            <li class="nav-item">
              <a class="nav-link" href="http://auth_2024.test/login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://auth_2024.test/register.php">Register</a>
            </li>
            <?php else : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $_SESSION["username"] ?>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container marketing">