<?php

$sql = "SELECT r.id, r.titre, r.accroche, a.prenom, a.nom FROM romans as r INNER JOIN auteurs as a ON a.id = r.auteur_id";
$stmt = $dbh->query($sql);
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php

    foreach ($articles as $article) { ?>

    <div class="post-preview">
    <a href="post.php?id=<?= $article['id'] ?>">
        <h2 class="post-title">
            <?= $article['titre'] ?>
        </h2>
        <h3 class="post-subtitle">
            <?= $article['prenom']." ".$article['nom'] ?>
        </h3>
    </a>
    <p class="post-meta"><?= $article['accroche'] ?></p>
    </div>
    <hr>

<?php } ?>


