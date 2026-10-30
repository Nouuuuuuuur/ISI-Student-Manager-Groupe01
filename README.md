# ISI Student Manager - Groupe 01

Mini-application PHP de gestion des étudiants et des projets, réalisée dans le cadre du module **Méthodologies de développement et Ateliers en PHP** (Master ISI - S1, Faculté des Sciences Semlalia).

Le travail est collaboratif : chaque membre développe une fonctionnalité sur sa propre branche et l'intègre dans `main` via une Pull Request relue par un autre membre.

**Dépôt :** https://github.com/Nouuuuuuuur/ISI-Student-Manager-Groupe01

---

## Membres du groupe

| Membre | Rôle | Branche | Fichier |
|---|---|---|---|
| ELKASRA NOURELHOUDA | Chef de projet, création du dépôt, page d'accueil | `feature/accueil` | `index.php` |
| MEZAROU ASSIA | Page des étudiants | `feature/etudiants` | `etudiants.php` |
| BEDDACH HOUDA | Page des projets | `feature/projets` | `projets.php` |
| MOUFID NOUHAILA | Mise en forme CSS et navigation | `feature/style` | `style.css` |

---

## Prérequis

- Git
- PHP 8 ou supérieur et XAMPP
- Un compte GitHub avec une clé SSH configurée

## Fonctionnalités

- **Accueil** (`index.php`) : message de bienvenue et navigation vers les autres pages.
- **Étudiants** (`etudiants.php`) : tableau de 3 étudiants.
- **Projets** (`projets.php`) : tableau de 3 projets.
- **Style** (`style.css`) : mise en forme commune et barre de navigation.
- **Configuration** (`configuration.txt`) : fichier utilisé pour l'exercice du conflit de fusion.

## Workflow Git

```
branche → commit → push → Pull Request → revue → merge vers main
```

---

## Exercice 1 : Installation et configuration

### Version de Git
Commande : `git --version`

![Version de Git](screenshots/01-git-version.png)

### Configuration de l'auteur
Commandes : `git config --global user.name`, `git config --global user.email`, `git config --global --list`

![Configuration user.name et user.email](screenshots/02-git-config.png)

![Affichage des paramètres](screenshots/03-git-config.png)

- `user.name` : nom de l'auteur enregistré dans chaque commit.
- `user.email` : adresse de l'auteur, utilisée par GitHub pour associer les commits au compte.

## Exercice 2 : Création du dépôt commun

### Création du dépôt (public, avec README)
![Création du dépôt](screenshots/04-creation-depot.jpeg)

### Invitation des collaborateurs
![Invitation des collaborateurs](screenshots/05-invitation-collaborateurs.jpeg)

### Acceptation de l'invitation (B, C, D)
![Acceptation de l'invitation](screenshots/06-acceptation-invitation.jpeg)

## Exercice 3 : SSH, clonage et premier contact

### Génération de la clé SSH Ed25519
Commande : `ssh-keygen -t ed25519 -C "email"`

![Génération de la clé SSH](screenshots/07-ssh-keygen.jpeg)

### Clé publique ajoutée sur GitHub
![Clé SSH sur GitHub](screenshots/08-github-ssh-key.jpeg)


### Clonage du dépôt
Commande : `git clone git@github.com:Nouuuuuuuur/ISI-Student-Manager-Groupe01.git`

![Clonage du dépôt](screenshots/09-git-clone.jpeg)

### Origin, branches et statut
Commandes : `git remote -v`, `git branch -a`, `git status`

![Remote, branches et statut](screenshots/10-remote-branches-status.jpeg)

| Terme | Signification |
|---|---|
| `clone` | Copie complète du dépôt distant (fichiers et historique) sur la machine locale. |
| `origin` | Nom par défaut du dépôt distant d'où le clone a été fait. |
| `main` | Branche principale locale. |
| `origin/main` | Copie locale de l'état de `main` sur GitHub, mise à jour par `fetch` ou `pull`. |
| `HEAD` | Pointeur vers la branche ou le commit sur lequel on travaille. |

## Exercice 4 : Commit initial

### Commit et push de `index.php` (étudiant A)
![Commit initial](screenshots/11-commit-initial.jpeg)

### Mise à jour des autres membres
Commande : `git pull origin main`

![Pull des autres membres](screenshots/12-pull-membres.png)

- `commit` : enregistre un instantané des modifications en local.
- `push` : envoie les commits locaux vers le dépôt distant GitHub.

## Exercice 5 : Branches individuelles

### Création et branche active
Commandes : `git checkout -b feature/...`, `git branch`

![Branche cree](screenshots/13-branche-cree.jpeg)

![Branche active](screenshots/14-branche-active.jpeg)

## Exercice 6 : Développement en parallèle

### Fichiers créés et commit/push de chaque branche
![Commit et push de feature/accueil](screenshots/15-push-accueil.png)

![Commit et push de feature/etudiants](screenshots/16-push-etudiants.png)

![Commit et push de feature/projets](screenshots/17-push-projets.png)

![Commit et push de feature/style](screenshots/18-push-style.jpeg)

## Exercice 7 : Pull Requests et revue de code

### Création d'une Pull Request (base `main`)
![Création d'une Pull Request](screenshots/19-creation-pr.jpeg)

### Revue de code : commentaire sur une ligne
![Commentaire de revue sur une ligne](screenshots/21-revue-commentaire.jpeg)

### Revue de code : résumé (Request changes / Approve)
![Résumé de la revue](screenshots/22-revue-resume.jpeg)

### Fusion de la Pull Request
![Fusion de la Pull Request](screenshots/23-merge-pr.jpeg)

### Mise à jour du `main` local
Commandes : `git checkout main`, `git pull origin main`

![Mise à jour de main](screenshots/24-pull-main.jpeg)

### Intérêt d'une Pull Request par rapport à un push direct sur `main`

Une Pull Request permet de proposer des modifications depuis une branche avant de les intégrer à `main`, alors qu'un push direct écrit immédiatement dans `main` sans aucun contrôle. Elle permet d'abord une revue de code, ce qui garde `main` stable. Elle conserve aussi une trace des commentaires, des corrections et des décisions prises. GitHub signale en outre les conflits avant la fusion, et chaque membre peut travailler en parallèle sur sa propre branche sans écraser le travail des autres.

## Exercice 8 : Conflit de fusion contrôlé

### `configuration.txt` publié sur `main` (étudiant A)
![configuration.txt sur main](screenshots/25-configuration-main.jpeg)

### Modification de la même ligne sur deux branches
![Modification de la version par B](screenshots/26-version-b.png)

![Modification de la version par C](screenshots/27-version-c.png)

### Pull Request de C fusionnée en premier
![PR de C fusionnée](screenshots/28-pr-c-fusionnee.png)

### Conflit observé chez B
Commandes : `git fetch origin`, `git merge origin/main`

![Conflit dans le terminal](screenshots/29-conflit-terminal.png)

![Marqueurs de conflit dans VS Code](screenshots/30-conflit-vscode.png)

### Conflit résolu
Contenu final de `configuration.txt`

![Fichier résolu](screenshots/31-conflit-resolu.png)

### Commit de résolution et push
![Commit de résolution](screenshots/32-commit-resolution.png)

### Pull Request de B après résolution
![PR de B sans conflit](screenshots/33-pr-b-resolue.png)

## Exercice 9 : Vérification et livrables

### Historique graphique des commits et branches
Commande : `git log --oneline --graph --all --decorate`

![Graphe des commits](screenshots/34-git-graph.jpeg)

![Graphe des commits depuis Github](screenshots/35-git-graph.jpeg)

### Application : page d'accueil
![Page d'accueil](screenshots/36-app-accueil.jpeg)

### Application : page des étudiants
![Page des étudiants](screenshots/37-app-etudiants.jpeg)

### Application : page des projets
![Page des projets](screenshots/38-app-projets.jpeg)

---