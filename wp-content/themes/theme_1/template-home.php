<?php /* Template Name: Homepage */ ?>

<?php get_header() ?>

<?php
$button_falc = get_field('button_falc');
$button_identification = get_field('button_identification');

$title_first_mission = get_field("title_first_mission");
$text_first_mission = get_field("text_first_mission");
$number_first_mission = get_field("number_first_mission");

$title_second_mission = get_field("title_second_mission");
$text_second_mission = get_field("text_second_mission");
$number_second_mission = get_field("number_second_mission");

$title_third_mission = get_field("title_third_mission");
$text_third_mission = get_field("text_third_mission");
$number_third_mission = get_field("number_third_mission");

$title_fourth_mission = get_field("title_fourth_mission");
$text_fourth_mission = get_field("text_fourth_mission");
$number_fourth_mission = get_field("number_fourth_mission");

$first_section_title = get_field("first_section_title");
$image_first_section = get_field("image_first_section");


$first_text_first_section = get_field("first_text_first_section");
$first_number_first_section = get_field("first_number_first_section");

$second_text_first_section = get_field("second_text_first_section");
$second_number_first_section = get_field("second_number_first_section");

$third_text_first_section = get_field("third_text_first_section");
$third_number_first_section = get_field("third_number_first_section");

$second_section_title = get_field("second_section_title");
$image_second_section = get_field("image_second_section");

$first_text_second_section = get_field("first_text_second_section");
$first_number_second_section = get_field("first_number_second_section");

$second_text_second_section = get_field("second_text_second_section");
$second_number_second_section = get_field("second_number_second_section");

$third_text_second_section = get_field("third_text_second_section");
$third_number_second_section = get_field("third_number_second_section");
?>

    <div class="all-buttons">
            <a class="buttons" href="<?= $button_falc['url'] ?>"><?= $button_falc['title'] ?></a>
            <a class="buttons" href="<?= $button_identification['url'] ?>"><?= $button_identification['title'] ?></a>
    </div>

    <h1>Pôle Liègeois D’<span>accompagnement</span> Vers Une École Inclusive</h1>

    <div class="missions">
        <section class="mission">
            <h2 class="mission__title"><?= $title_first_mission ?></h2>
            <p class="mission__text"><?= $text_first_mission ?></p>
            <span class="mission__number"><?= $number_first_mission ?></span>

        </section>

        <section class="mission">
            <h2 class="mission__title"><?= $title_second_mission ?></h2>
            <p class="mission__text"><?= $text_second_mission ?></p>
            <span class="mission__number"><?= $number_second_mission ?></span>
        </section>

        <section class="mission">
            <h2 class="mission__title"><?= $title_third_mission ?></h2>
            <p class="mission__text"><?= $text_third_mission ?></p>
            <span class="mission__number"><?= $number_third_mission ?></span>
        </section>

        <section class="mission">
            <h2 class="mission__title"><?= $title_fourth_mission ?></h2>
            <p class="mission__text"><?= $text_fourth_mission ?></p>
            <span class="mission__number"><?= $number_fourth_mission ?></span>
        </section>
    </div>

    <section class="section__container">
        <img src="<?= $image_first_section['url'] ?>"
             alt="<?= $image_first_section['alt'] ?>"
             width="<?= $image_first_section['width'] ?>"
             height="<?= $image_first_section['height'] ?>"
        >

        <div class="section__contents">
            <h2 class="section__title"><?= $first_section_title ?></h2>
            <div class="section__content">
                <p class="section__number"><?= $first_number_first_section ?></p>
                <p><?= $first_text_first_section ?></p>
            </div>
            <div class="section__content">
                <p class="section__number"><?= $second_number_first_section ?></p>
                <p><?= $second_text_first_section ?></p>
            </div>
            <div class="section__content">
                <p class="section__number"><?= $third_number_first_section ?></p>
                <p><?= $third_text_first_section ?></p>
            </div>
        </div>
    </section>
    <section class="section__container">
        <div class="section__contents">
            <h2 class="section__title"><?= $second_section_title ?></h2>
            <div class="section__content">
                <p class="section__number"><?= $first_number_second_section ?></p>
                <p><?= $first_text_second_section ?></p>
            </div>
            <div class="section__content">
                <p class="section__number"><?= $second_number_second_section ?></p>
                <p><?= $second_text_second_section ?></p>
            </div>
            <div class="section__content">
                <p class="section__number"><?= $third_number_second_section ?></p>
                <p><?= $third_text_second_section ?></p>
            </div>
        </div>
        <img src="<?= $image_second_section['url'] ?>"
             alt="<?= $image_second_section['alt'] ?>"
             width="<?= $image_second_section['width'] ?>"
             height="<?= $image_second_section['height'] ?>"
        >
    </section>

<?php get_footer(); ?>