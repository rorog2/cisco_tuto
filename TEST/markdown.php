<?php
include('../config/connexion.php');
require('../bibliotheques/Markdown.php');

$texte = '
# Titre 1

Je suis la

## Titre 2

> Citation

je suis `du code`
';
$resultat_html = Markdown($texte_en_markdown);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Acceuil</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style_pc.css" />
</head>
<body>
<?php include('header.php'); ?>
<main>
<? echo $resultat_html; ?>
</main>
<?php include('footer.php'); ?>
</body>
</html>