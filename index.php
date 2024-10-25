<?php

require __DIR__.'/vendor/autoload.php';

// Initialisation du moteur Mustache
$mustache = new Mustache_Engine([
    'loader' => new Mustache_Loader_FilesystemLoader(__DIR__ . '/templates'),
]);

// Détection de la page à afficher (par défaut 'page1')
$page = isset($_GET['page']) && in_array($_GET['page'], ['page1', 'page2']) ? $_GET['page'] : 'page1';

// Rendu du layout avec le contenu de la page choisie
echo $mustache->render("layout", [
    'title' => "Hidden Clues - " . ucfirst($page), // Titre dynamique
    'content' => $mustache->render($page) // Rendu de la page dynamique
]);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


</body>
</html>
