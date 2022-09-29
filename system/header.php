<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQe
    CzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/mijnstijl.css">
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a>SessieVoorbeeld</a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="margin-left: auto;">
          <li><a href="home.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">VoorbeeldLink</a></li>
          <li><a href="#" class="nav-link px-2 text-white">VoorbeeldLink</a></li>
          <li><a href="contact.php" class="nav-link px-2 text-white">Contact</a></li>
        </ul>

        <div class="text-end">
          <a class="btn btn-outline-light me-2" href="inloggen.php" role="button">Inloggen</a>
          <a class="btn btn-outline-light me-2" href="uitloggen.php" role="button">Uitloggen</a>
        </div>
      </div>
    </div>
  </header>
<div class="container">
    <br><br>

    <h1 class="koptekst"><?php echo $page_title; ?></h1>
    

