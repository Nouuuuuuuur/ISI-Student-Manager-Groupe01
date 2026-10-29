<?php
// etudiants.php - Gestion des étudiants (Étudiant B)

// Définition d'un tableau PHP contenant 3 étudiants
$etudiants = [
    ["id" => 1, "nom" => "Elkasra", "prenom" => "Nour", "filiere" => "ISI"],
    ["id" => 2, "nom" => "Beddach", "prenom" => "Houda", "filiere" => "ISI"],
    ["id" => 3, "nom" => "Moufid", "prenom" => "Nouhaila", "filiere" => "ISI"]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Étudiants - ISI Student Manager</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Liste des Étudiants</h1>
    <p>Bienvenue sur la page de gestion des étudiants.</p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Filière</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
                <tr>
                    <td><?= $etudiant['id'] ?></td>
                    <td><?= htmlspecialchars($etudiant['nom']) ?></td>
                    <td><?= htmlspecialchars($etudiant['prenom']) ?></td>
                    <td><?= htmlspecialchars($etudiant['filiere']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p><a href="index.php">← Accueil</a></p>
</body>
</html>