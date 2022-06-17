<?php

// Inclusion du fichier s'occupant de la connexion à la DB (Objectif principal)
require __DIR__.'/inc/db.php'; 
// Rappel : la variable $pdo est disponible dans ce fichier
//          car elle a été créée par le fichier inclus ci-dessus

// Initialisation de variables (évite les "NOTICE - variable inexistante")
$argonautList = array();
$name = '';

// Si le formulaire a été soumis
if (!empty($_POST) && isset($_POST['insertArgonaut'])) {
    // Récupération des valeurs du formulaire dans des variables
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    
    // if (isset($_POST['name'])) {
    //     $_POST['name'];
    // } else {
    //     '';
    // }

    // Insertion en DB de l'Argonaute
    $insertQuery = "
        INSERT INTO argonauts (Nom)
        VALUES ('{$name}')
    ";
    // Objectif : exécuter la requête qui insère les données
    // une fois inséré, faire une redirection vers la page "index.php" (fonction header)
    // --- START OF MY CODE ---
    $count = $pdo->exec($insertQuery);

    if ($count > 0) {
        header('Location: index.php');
    } else {
        echo 'Insertion a échoué';
    }    // --- END OF MY CODE ---
}


// Liste des Argonautes
// Objectif : récupérer cette liste depuis la base de données
// --- START OF MY CODE ---
// $argonautList = array(
//     1 => 'Jason',
//     2 => 'Heracles',
//     3 => 'Atalante',
//     4 => 'Asclepius'
// );

    $argonautList = $pdo->query('SELECT * FROM argonauts;')->fetchAll(PDO::FETCH_UNIQUE|PDO::FETCH_COLUMN,1);

// --- END OF MY CODE ---


// Inclusion du fichier s'occupant d'afficher le code HTML
// Je fais cela car mon fichier actuel est déjà assez gros, donc autant le faire ailleurs (pas le métier hein ! ;) )
require __DIR__.'/view/argo_main.php';