<?php /* Template Name: Demande d'accès */ ?>
<?php get_header() ?>

<?php
$deconnexion_button = get_field('deconnexion_button');
$title_page_principal = get_field('title_page_principal');

$identification_acces = get_field('identification_acces');
$scolaire_mail = get_field('scolaire_mail');
?>
<div class="body-form">
    <div class="all-buttons">
        <div class="back-buttons">
            <a class="buttons" href="<?= $deconnexion_button['url'] ?>"><?= $deconnexion_button['title'] ?></a>
        </div>
    </div>

    <div class="title__content">
        <?= $title_page_principal ?>
    </div>

    <form class="form" action="<?= admin_url('admin-post.php'); ?>" method="POST">
        <p class="form__text">
            Les enseignants ou membre de l'équipe PLAI peuvent ce connecter ici. Si c'est la premier foie une vérification sera effectuer avant de pouvoir y accéder.
        </p>
        <div class="form__group">
            <label class="form__label" for="fase">Numéro de fase d'implentation ⓘ *</label>
            <input class="form__input" type="number" id="fase" name="fase" value="" placeholder="Ex : 5988" required/>
        </div>

        <div class="form__group">
            <label class="form__label" for="email">Adresse mail de contact ⓘ *</label>
            <input class="form__input" type="email" id="email" name="email" value=""
                   placeholder="Ex : jeandumont@heple.be"
                   required/>
        </div>

        <div class="form__group">
            <label class="form__label" for="message">Pourquoi je demande l'accée ? ⓘ *</label>
            <textarea class="form__input" id="message" name="message" placeholder="Message..." required></textarea>
        </div>
        <div class="form-buttons">
            <?php if ($identification_acces): ?>
                <button type="submit" class="form-button_valid"><?= $identification_acces['title'] ?></button>
            <?php endif; ?>
            <?php if ($scolaire_mail): ?>
                <a class="buttons__bis" href="<?= $scolaire_mail['url'] ?>"><?= $scolaire_mail['title'] ?></a>
            <?php endif; ?>
        </div>
    </form>
</div>
<?php get_footer() ?>
