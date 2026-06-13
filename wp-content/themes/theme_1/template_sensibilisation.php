<?php /* Template Name: Sensibilisation */ ?>
<?php get_header() ?>
<?php
$deconnexion_button = get_field('deconnexion_button');
$title_page_principal = get_field('title_page_principal');
$sensibilisations = get_field('sensibilisations');
$sensibilisation_title_1 = get_field('sensibilisation_title_1');
$sensibilisation_text_1 = get_field('sensibilisation_text_1');
$sensibilisation_link_1 = get_field('sensibilisation_link_1');
$sensibilisation_title_2 = get_field('sensibilisation_title_2');
$sensibilisation_text_2 = get_field('sensibilisation_text_2');
$sensibilisation_link_2 = get_field('sensibilisation_link_2');
$sensibilisation_title_3 = get_field('sensibilisation_title_3');
$sensibilisation_text_3 = get_field('sensibilisation_text_3');
$sensibilisation_link_3 = get_field('sensibilisation_link_3');
?>
<div class="all-buttons">
    <div class="back-buttons">
        <a class="buttons" href="<?= $deconnexion_button['url'] ?>"><?= $deconnexion_button['title'] ?></a>
    </div>
</div>
<?= $title_page_principal ?>
<div class="home-plai">
    <section class="home-plai__section home-plai__section--sensibilisations">
        <?php if ($sensibilisations): ?>
            <h2 class="home-plai__title"><?= $sensibilisations ?></h2>
        <?php endif; ?>

        <ul class="home-plai__list">

            <?php if ($sensibilisation_text_1): ?>
            <li class="home-plai__list-item">
                <?= $sensibilisation_text_1 ?>
                <?php endif; ?>

                <?php if ($sensibilisation_link_1): ?>
                    <a class="home-plai__link" href="<?= $sensibilisation_link_1['url'] ?>">
                        <?= $sensibilisation_link_1['title'] ?>
                    </a>
                <?php endif; ?>
            </li>

            <?php if ($sensibilisation_text_2): ?>
            <li class="home-plai__list-item">
                <?= $sensibilisation_text_2 ?>
                <?php endif; ?>

                <?php if ($sensibilisation_link_2): ?>
                    <a class="home-plai__link" href="<?= $sensibilisation_link_2['url'] ?>">
                        <?= $sensibilisation_link_2['title'] ?>
                    </a>
                <?php endif; ?>
            </li>

            <?php if ($sensibilisation_text_3): ?>
            <li class="home-plai__list-item">
                <?= $sensibilisation_text_3 ?>
                <?php endif; ?>

                <?php if ($sensibilisation_link_3): ?>
                    <a class="home-plai__link" href="<?= $sensibilisation_link_3['url'] ?>">
                        <?= $sensibilisation_link_3['title'] ?>
                    </a>
                <?php endif; ?>
            </li>
        </ul>
    </section>
</div>
<?php get_footer() ?>
