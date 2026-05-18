<?php /* Template Name: Demande d'accès */ ?>
<?php get_header() ?>

<?php
$deconnexion_button = get_field('deconnexion_button');

$identification_acces = get_field('identification_acces');
$scolaire_mail = get_field('scolaire_mail');
?>

<a class="buttons" href="<?= $deconnexion_button['url'] ?>"><?= $deconnexion_button['title'] ?></a>

<p>Les enseignants ou membre de l'équipe PLAI peuvent ce connecter ici. Si c'est la premier fois une vérification sera
    effectuer avant de pouvoir y accéder.</p>

<form class="form" action="<?= admin_url('admin-post.php'); ?>" method="POST">
    <div class="form__group">
        <label class="form__label" for="fase">Numéro de fase d'implentation ⓘ *</label>
        <input class="form__input" type="number" id="fase" name="fase" value="" placeholder="Ex : 5988" required/>
    </div>

    <div class="form__group">
        <label class="form__label" for="email">Adresse mail de contact ⓘ *</label>
        <input class="form__input" type="email" id="email" name="email" value="" placeholder="Ex : jeandumont@heple.be"
               required/>
    </div>

    <div class="form__group">
        <label class="form__label" for="message">Pourquoi je demande l'accée ? ⓘ *</label>
        <textarea class="form__input" id="message" name="message" placeholder="Message..." required></textarea>
    </div>
    <?php if ($identification_acces): ?>
    <a class="buttons" href="<?= $identification_acces['url'] ?>"><?= $identification_acces['title'] ?></a>
    <?php endif; ?>
    <?php if ($scolaire_mail): ?>
    <a class="buttons" href="<?= $scolaire_mail['url'] ?>"><?= $scolaire_mail['title'] ?></a>
    <?php endif; ?>
</form>
<?php get_footer() ?>
