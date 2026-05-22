<?php /* Template Name: Equipe plai */ ?>
<?php get_header() ?>
<?php
$deconnexion_button = get_field('deconnexion_button');

?>
<div class="all-buttons">
    <div class="back-buttons">
        <a class="buttons" href="<?= $deconnexion_button['url'] ?>"><?= $deconnexion_button['title'] ?></a>
    </div>
</div>

    <h1>L'<span>équipe</span> Plai</h1>

<section class="equipes">

    <div class="equipe">
        <div class="equipe__header">
            <h2 class="equipe__titre">Équipe terrain</h2>
        </div>
        <div class="equipe__membres">

            <div class="equipe__membre">
                <div class="equipe__avatar">CM</div>
                <p class="equipe__nom">Claire Moreau</p>
                <p class="equipe__specialite">Biodiversité</p>
            </div>

            <div class="equipe__membre">
                <div class="equipe__avatar">TR</div>
                <p class="equipe__nom">Thomas Renard</p>
                <p class="equipe__specialite">Gestion des sols</p>
            </div>

            <div class="equipe__membre">
                <div class="equipe__avatar">LD</div>
                <p class="equipe__nom">Lucie Dubois</p>
                <p class="equipe__specialite">Agriculture durable</p>
            </div>

        </div>
    </div>

    <div class="equipe">
        <div class="equipe__header">
            <h2 class="equipe__titre">Équipe coordination</h2>
        </div>
        <div class="equipe__membres">

            <div class="equipe__membre">
                <div class="equipe__avatar">ML</div>
                <p class="equipe__nom">Marc Lambert</p>
                <p class="equipe__specialite">Médiation</p>
            </div>

            <div class="equipe__membre">
                <div class="equipe__avatar">SP</div>
                <p class="equipe__nom">Sophie Perin</p>
                <p class="equipe__specialite">Communication</p>
            </div>

            <div class="equipe__membre">
                <div class="equipe__avatar">AB</div>
                <p class="equipe__nom">Antoine Boix</p>
                <p class="equipe__specialite">Logistique</p>
            </div>

        </div>
    </div>

</section>
<?php get_footer() ?>
