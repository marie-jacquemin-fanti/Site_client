<?php /* Template Name: Accueil Plai */ ?>

<?php
$deconnexion_button = get_field('deconnexion_button');

$title_connexion_plai = get_field('title_connexion_plai');

$referent_title = get_field('referent_title');
$referent_text = get_field('referent_text');
$referent_link = get_field('referent_link');

$welcome_title = get_field('welcome_title');
$welcome_text = get_field('welcome_text');

$problems_title = get_field('problems_title');
$problems_text = get_field('problems_text');

$steps = get_field('steps');
$step_description_1 = get_field('step_description_1');
$step_description_2 = get_field('step_description_2');
$step_description_3 = get_field('step_description_3');
$step_description_4 = get_field('step_description_4');

$team_title = get_field('team_title');
$team_text = get_field('team_text');
$team_link = get_field('team_link');

$informations_utiles = get_field('informations_utiles');
$information_title_1 = get_field('information_title_1');
$information_link_1 = get_field('information_link_1');
$information_title_2 = get_field('information_title_2');
$information_link_2 = get_field('information_link_2');

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

<?php get_header(); ?>

    <div class="all-buttons">
        <?php if ($deconnexion_button): ?>
            <a class="buttons" href="<?= $deconnexion_button['url'] ?>"><?= $deconnexion_button['title'] ?></a>
        <?php endif; ?>
    </div>

    <h1>Bienvenue Sur <span>Votre</span> Espace PLAI</h1>

    <!-- Référent -->
    <div class="home-plai">
        <section class="home-plai__section--referent">
            <?php if ($referent_title): ?>
                <h2 class="home-plai__title"><?= $referent_title ?></h2>
            <?php endif; ?>

            <?php if ($referent_text): ?>
                <p class="home-plai__text">
                    <?= $referent_text ?>
                    <a class="home-plai__link" href="<?= $referent_link['url'] ?>"><?= $referent_link['title'] ?></a>.
                </p>
            <?php endif; ?>
        </section>
        <!-- Messages -->
        <section class="home-plai__content">
            <?php if ($welcome_title): ?>
                <h2 class="home-plai__title"><?= $welcome_title ?></h2>
            <?php endif; ?>

            <?php if ($welcome_text): ?>
                <p class="home-plai__text">
                    <?= $welcome_text ?>
                </p>
            <?php endif; ?>
        </section>

        <section class="home-plai__content">
            <?php if ($problems_title): ?>
                <h2 class="home-plai__title"><?= $problems_title ?></h2>
            <?php endif; ?>

            <?php if ($problems_text): ?>
                <p class="home-plai__text">
                    <?= $problems_text ?>
                </p>
            <?php endif; ?>
        </section>

        <section class="home-plai__content home-plai__section--steps">
            <?php if ($steps): ?>
                <h2 class="home-plai__title"><?= $steps ?></h2>
            <?php endif; ?>

            <ul class="home-plai__list">
                <?php if ($step_description_1): ?>
                    <li class="home-plai__list-item"><?= $step_description_1 ?></li>
                <?php endif; ?>

                <?php if ($step_description_2): ?>
                    <li class="home-plai__list-item"><?= $step_description_2 ?></li>
                <?php endif; ?>

                <?php if ($step_description_3): ?>
                    <li class="home-plai__list-item"><?= $step_description_3 ?></li>
                <?php endif; ?>

                <?php if ($step_description_4): ?>
                    <li class="home-plai__list-item"><?= $step_description_4 ?></li>
                <?php endif; ?>
            </ul>
        </section>
        <!-- TODO : Make the section équipe plai -->
        <section class="home-plai__section home-plai__section--sensibilisations">

            <?php if ($team_title): ?>
            <h2 class="home-plai__title"><?= $team_title ?>
                </h2>
                    <?php endif; ?>
                    <?php if ($team_text): ?>
                        <?php if ($team_link): ?>
                            <p class="home-plai__text"><?= $team_text ?> <a class="home-plai__link" href="<?= $team_link['url'] ?>"><?= $team_link['title'] ?></a></p>
                        <?php endif; ?>
                    <?php endif; ?>

        </section>

        <!-- Information utiles -->
        <section class="home-plai__section home-plai__section--infos">
            <?php if ($informations_utiles): ?>
                <h2 class="home-plai__title"><?= $informations_utiles ?></h2>
            <?php endif; ?>

            <ul class="home-plai__list">
                <?php if ($information_title_1): ?>
                <li class="home-plai__list-item">
                    <?= $information_title_1 ?>
                    <?php endif; ?>

                    <?php if ($information_link_1): ?>
                        <a class="home-plai__link" href="<?= $information_link_1['url'] ?>">
                            <?= $information_link_1['title'] ?>
                        </a>
                    <?php endif; ?>
                </li>

                <?php if ($information_title_2): ?>
                <li class="home-plai__list-item">
                    <?= $information_title_2 ?>
                    <?php endif; ?>

                    <?php if ($information_link_2): ?>
                        <a class="home-plai__link" href="<?= $information_link_2['url'] ?>">
                            <?= $information_link_2['title'] ?>
                        </a>
                    <?php endif; ?>
                </li>
            </ul>
        </section>
        <!-- Sensibilisation -->
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
<?php get_footer(); ?>