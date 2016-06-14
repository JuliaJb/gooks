<?php

$sql = "SELECT id, prenom, nom, genre FROM auteurs ORDER BY nom";
$stmt = $dbh->query($sql);
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php

    foreach ($articles as $article) { ?>

    <div class="post-preview">
    <a href="auteur.php?id=<?= $article['id'] ?>">
        <h2 class="post-title">
            <?= $article['nom'] ?>
        </h2>
        <h3 class="post-subtitle">
            <?= $article['prenom'] ?>
        </h3>
    </a>
    <p class="post-meta"><?= $article['genre'] ?></p>
    </div>
    <hr>

<?php } ?>


