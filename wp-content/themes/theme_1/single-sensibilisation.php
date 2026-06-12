<?php get_header(); ?>


<?php
$trouble = get_field('trouble');
$effet = get_field('effet');
$consequence = get_field('consequence');
$link = get_field('link');
?>

<?php while (have_posts()) : the_post(); ?>

    <article>
        <h2><?php the_title(); ?></h2>

        <ul>
            <li><strong>Le trouble visé :</strong> <?= $trouble; ?></li>
            <li><strong>Ce que ça crée chez l'enfant :</strong> <?= $effet ?></li>
            <li><strong>Ce qui se passe si on ne fait rien :</strong> <?= $consequence ?></li>
            <li>
                <strong>Lien outil :</strong>
                <a href="<?= $link['url'] ?>"><?= $link['title'] ?></a>
            </li>
        </ul>
    </article>

<?php endwhile; ?>

<?php get_footer(); ?>

