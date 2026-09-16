<?php
    require_once('config/connexion.php');
    $req=$connexion->prepare("SELECT * FROM film f INNER JOIN realisateur r ON f.id_realisateur=r.id_realisateur
    INNER JOIN genre g ON f.id_genre=g.id_genre");
    $req->execute();
    $films=$req->fetchAll(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID Film</th>
                    <th>Poster</th>
                    <th>Titre</th>
                    <th>Genre</th>
                    <th>Date de sortie</th>
                    <th>Duree</th>
                    <th>classification d'age</th>
                    <th>Realisateur</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($films as $film){
                ?>
                    <tr>
                        <td><?= $film["id_film"] ?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </main>
</html>