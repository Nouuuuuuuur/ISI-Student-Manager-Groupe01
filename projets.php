<?php
$projets = [
    ["id" => 1, "titre" => "Gestion des étudiants", "responsable" => "Étudiant B", "statut" => "En cours"],
    ["id" => 2, "titre" => "Page d'accueil",        "responsable" => "Étudiant A", "statut" => "Terminé"],
    ["id" => 3, "titre" => "Projet PHP ISI",        "responsable" => "Étudiant C", "statut" => "En cours"],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projets - ISI Student Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des projets</h1>
    <table border="1" cellpadding="6">
        <tr><th>ID</th><th>Titre</th><th>Responsable</th><th>Statut</th></tr>
        <?php foreach ($projets as $p): ?>
        <tr>
            <td><?= $p["id"] ?></td>
            <td><?= htmlspecialchars($p["titre"]) ?></td>
            <td><?= htmlspecialchars($p["responsable"]) ?></td>
            <td><?= htmlspecialchars($p["statut"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="index.php">← Accueil</a></p>
</body>
</html>