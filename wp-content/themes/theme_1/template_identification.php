<?php /* Template Name: Identification */ ?>
<?php get_header() ?>
<?php
$deconnexion_button = get_field('deconnexion_button');
$title_page_principal = get_field('title_page_principal');

$identification = get_field('identification');
$whitout_scolaire_mail = get_field('whitout_scolaire_mail');
$fase_number_identification = get_field('fase_number_identification');
$scolaire_mail = get_field('scolaire_mail');
?>
<div class="all-buttons">
    <div class="back-buttons">
        <a class="buttons" href="<?= $deconnexion_button['url'] ?>"><?= $deconnexion_button['title'] ?></a>
    </div>
</div>
<?= $title_page_principal ?>
<p class="form__text">Les enseignants ou membre de l'équipe PLAI peuvent ce connecter ici. Si c'est la première fois une
    vérification sera
    effectuer avant de pouvoir y accéder.</p>

<form class="form" action="<?= admin_url('admin-post.php'); ?>" method="POST">
    <div class="form__group">
        <?php if ($fase_number_identification): ?>
            <label class="form__label" for="fase"><?= $fase_number_identification ?></label>
        <?php endif; ?>

        <input class="form__input" type="number" id="fase" name="fase" value="" placeholder="Ex : 5988" required/>
    </div>

    <div class="form__group">
        <?php if ($fase_number_identification): ?>
            <label class="form__label" for="email"><?= $scolaire_mail ?></label>
        <?php endif; ?>
        <input class="form__input" type="email" id="email" name="email" value="" placeholder="Ex : jeandumont@heple.be"
               required/>
    </div>
    <div class="form-buttons">
        <?php if ($identification): ?>
            <a class="form-button_valid" href="<?= $identification['url'] ?>"><?= $identification['title'] ?></a>
        <?php endif; ?>
        <?php if ($whitout_scolaire_mail): ?>
            <a class="form-button"
               href="<?= $whitout_scolaire_mail['url'] ?>"><?= $whitout_scolaire_mail['title'] ?></a>
        <?php endif; ?>
    </div>
</form>
<?php get_footer() ?>
