<?php
// etudiants.php - Gestion des étudiants (Étudiant B)

// Définition d'un tableau PHP contenant 3 étudiants
$etudiants = [
    ["id" => 1, "nom" => "E", "prenom" => "Mohammed", "filiere" => "ISI"],
    ["id" => 2, "nom" => "Bennani", "prenom" => "Fatima", "filiere" => "ISI"],
    ["id" => 3, "nom" => "Tazi", "prenom" => "Youssef", "filiere" => "ISI"]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Étudiants - ISI Student Manager</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
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
                    <td><?php echo $etudiant['id']; ?></td>
                    <td><?php echo $etudiant['nom']; ?></td>
                    <td><?php echo $etudiant['prenom']; ?></td>
                    <td><?php echo $etudiant['filiere']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>