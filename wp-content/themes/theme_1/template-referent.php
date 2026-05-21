<?php /* Template Name: Référent */ ?>
<?php
$page_title = get_field('page_title');
$referent_name = get_field('referent_name');
$referent_phone = get_field('referent_phone');
$referent_mail = get_field('referent_mail');
$deconnexion_button = get_field('deconnexion_button');

?>
<?php get_header(); ?>

<div class="back-buttons">
    <a class="buttons" href="<?= $deconnexion_button['url'] ?>"><?= $deconnexion_button['title'] ?></a>
</div>

<?php if ($page_title): ?>
    <h1><?= $page_title ?></h1>
<?php endif; ?>

<!-- Référent -->
<div class="home-plai">
    <section class="home-plai__section--referent">
        <?php if ($referent_name): ?>
            <h2 class="home-plai__title"><?= $referent_name ?></h2>
        <?php endif; ?>
        <?php if ($referent_phone): ?>
        <p class="home-plai__text"><?= $referent_phone ?></p>
        <?php endif; ?>
        <?php if ($referent_mail): ?>
        <p class="home-plai__text"><?= $referent_mail ?></p>
        <?php endif; ?>
    </section>
</div>
<?php get_footer(); ?>
