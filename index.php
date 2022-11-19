<?php

require("config/function.php");
$Equipages = afficher();
?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Argonautes</title>
</head>

<body>

  <!-- Header section -->
  <header>
    <h1>
      <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
      Les Argonautes
    </h1>
  </header>

  <!-- Main section -->
  <main>

    <!-- New member form -->
    <h2>Ajouter un(e) Argonaute</h2>
    <form method="post" class="new-member-form">
      <label for="name">Nom de l'Argonaute</label>
      <input name="name" type="text" placeholder="Charalampos" />
      <button type="submit" name="envoyer" class="btn btn-success">Envoyer</button>
    </form>

    <!-- Member list -->
    <h2>Membres de l'équipage</h2>
    <section class="member-list">
      <table class="table text-center">
        <thead class="bg-dark text-white">
          <tr>
            <th>Colonne 1</th>
            <th>Colonne 2</th>
            <th>Colonne 3</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($Equipages as $Equipage) : ?>
            <th><?= $Equipage->name ?></th>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </main>

  <footer>
    <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
  </footer>

</body>

</html>

<?php
if (isset($_POST['envoyer'])) {
  if (isset($_POST['name'])) {
    if (!empty($_POST['name']))
      $name = htmlspecialchars(strip_tags($_POST['name']));
    ajouter($name);
  }
}
?>