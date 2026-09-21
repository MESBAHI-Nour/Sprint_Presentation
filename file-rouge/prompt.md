# Prompt 1 — CRUD sur la table Image
Je travaille sur un projet d'école : une plateforme de vente de photos, où des
photographes publient leurs images et où les clients peuvent les consulter et
les acheter. J'ai déjà terminé la partie conception (dictionnaire de données,
dépendances fonctionnelles, MCD), maintenant je passe à la réalisation.

Important : on doit utiliser uniquement HTML, CSS, JavaScript, PHP et MySQL.
Pas de framework, pas de Bootstrap, pas de Laravel — mon prof veut du PHP natif.

Voici mon MCD, j'ai 4 entités :

photographe (id_photographe, nom_photographe, prenom_photographe,
             email_photographe, mot_de_passe)
style       (id_style, nom_style, description_style)
licence     (id_licence, nom_licence, description_licence, prix_licence)
image       (id_image, titre_image, description_image, fichier_image,
             prix_image, date_publication)

Les relations :
- Un photographe publie 0 ou plusieurs images, une image est publiée par un
  seul photographe (0,n / 1,1)
- Une image contient un seul style, un style concerne 0 ou plusieurs images (1,1 / 0,n)
- Une image est associée à une seule licence, une licence concerne 0 ou
  plusieurs images (1,1 / 0,n)

Donc la table image doit contenir les 3 clés étrangères : id_photographe,
id_style et id_licence.

Ce que je veux de toi :

1. Le script SQL complet (schema.sql) pour créer la base et les 4 tables, avec
   les clés étrangères, en InnoDB et utf8mb4. Ajoute aussi des données de test :
   3 photographes, 4 styles, 3 licences et 6 images, pour que je puisse tester
   tout de suite.

2. Un fichier config/connexion.php avec une connexion PDO à la base (mode
   exception activé).

3. Les 4 opérations CRUD sur la table image :
   - Ajouter une image (avec upload du fichier)
   - Afficher les images (avec une jointure pour récupérer le nom du
     photographe, le style et la licence — pas de requête dans une boucle)
   - Modifier une image
   - Supprimer une image (supprimer aussi le fichier du dossier uploads)

Pour l'upload : accepter seulement jpg, jpeg, png et webp, maximum 2 Mo,
vérifier le vrai type du fichier et pas juste l'extension. Enregistrer le
fichier dans un dossier uploads/ avec un nom unique, et stocker seulement le
chemin dans la base.

Utilise obligatoirement des requêtes préparées partout, jamais de
concaténation dans le SQL. Et fais la validation côté serveur aussi, pas
seulement en JavaScript.

Les messages d'erreur doivent être en français. Donne-moi les fichiers complets,
prêts à être lancés sur sql serveur.

# Prompt 2 — Espace admin
Je continue mon projet de plateforme de vente de photos (HTML, CSS, JavaScript,
PHP, MySQL uniquement, sans framework). J'ai déjà la base de données et les
fonctions CRUD sur la table image.

Maintenant je veux créer l'espace admin, c'est-à-dire l'interface qui permet de
gérer les images.

Note importante : pour l'instant il n'y a pas de système de connexion.
L'espace admin est accessible directement, sans login. Mets juste un commentaire
// TODO : ajouter l'authentification à l'endroit où il faudra la mettre plus tard,
parce que je vais peut-être l'ajouter dans un prochain sprint.

Voici les pages que je veux :

- Une page d'accueil de l'admin qui affiche toutes les images dans un tableau :
  la miniature de l'image, le titre, le prix, la date de publication, le nom du
  photographe, le style et la licence. Avec un bouton Modifier et un bouton
  Supprimer sur chaque ligne, et un bouton "Ajouter une image" en haut.

- Une page pour ajouter une image, avec un formulaire contenant : titre,
  description, fichier image, prix, date de publication, et trois listes
  déroulantes pour choisir le photographe, le style et la licence (remplies
  automatiquement depuis la base).

- Une page pour modifier une image, avec le même formulaire mais déjà rempli
  avec les infos de l'image. Si je ne choisis pas un nouveau fichier, l'ancienne
  image doit rester.

- La suppression doit demander une confirmation avant de supprimer, et se faire
  en POST, pas en GET.

Ajoute aussi dans la page d'accueil de l'admin :
- Une barre de recherche pour filtrer les images par titre
- Deux listes déroulantes pour filtrer par style et par licence
- Un message quand il n'y a aucun résultat

Après chaque action (ajout, modification, suppression), je veux être redirigé
vers la liste avec un message de confirmation en vert (ou en rouge si erreur).
Utilise le principe POST/Redirect/GET pour éviter que le formulaire se renvoie
si je rafraîchis la page.

Pense aussi à protéger l'affichage avec htmlspecialchars pour éviter les failles XSS.

Organise le code proprement avec un header et un footer séparés que je peux
inclure dans chaque page. Donne-moi tous les fichiers complets.

# Prompt 3 — Design
Je finalise mon projet de plateforme de vente de photos. J'ai déjà l'espace
admin et le CRUD qui fonctionnent, maintenant je veux m'occuper du design.

Rappel : uniquement HTML, CSS et JavaScript natif. Pas de Bootstrap, pas de
Tailwind, pas de librairie externe — je dois écrire le CSS moi-même.

Ce que je veux :

1. Une feuille de style pour l'espace admin qui fait propre et professionnel :
   - Une barre de navigation en haut avec le nom du site et les liens
   - Un tableau lisible, avec les lignes qui changent de couleur au survol
   - Des boutons bien visibles : bleu pour Modifier, rouge pour Supprimer,
     vert pour Ajouter
   - Des formulaires aérés, avec les champs bien alignés et les labels clairs
   - Les messages de confirmation et d'erreur bien visibles en haut de la page

2. Une page publique (index.php) qui affiche la galerie des photos en vente,
   sous forme de grille de cartes. Chaque carte montre la photo, le titre, le
   prix, le style et le nom du photographe. Au survol, la carte se soulève
   légèrement. Cette page est en lecture seule, sans boutons de modification.

3. Le tout doit être responsive : la grille passe à 3 colonnes sur ordinateur,
   2 sur tablette et 1 sur téléphone. Sur petit écran, le tableau de l'admin
   doit rester utilisable (défilement horizontal ou affichage en cartes).

Pour le style visuel, je veux quelque chose de sobre et moderne, adapté à un
site de photographie : fond clair et neutre pour que les photos ressortent
bien, une couleur d'accent, des coins légèrement arrondis et des ombres
discrètes. Évite les couleurs criardes.

Utilise Flexbox et CSS Grid, et des variables CSS pour les couleurs afin que je
puisse changer le thème facilement. Commente les grandes sections du CSS pour
que je comprenne ce que fait chaque partie.

Donne-moi les fichiers CSS complets et dis-moi où les inclure.