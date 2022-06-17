<?php

// Objectif : créer un objet PDO permettant de se connecter à la base de données "argonautes"
// et le stocker dans la variable $pdo
// --- START OF MY CODE ---
$dsn ="mysql:host=localhost;dbname=argonauts";
$user ="root";
$pass = "";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];

$pdo = new PDO($dsn, $user, $pass, $options);

// --- END OF MY CODE ---