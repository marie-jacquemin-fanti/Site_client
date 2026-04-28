<?php /* Template Name: Homepage */ ?>

<?php get_header() ?>

<?php
$title_homepage = get_field("title_homepage");

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
    <h1><?= $title_homepage ?></h1>

    <section>
        <h2><?= $title_first_mission ?></h2>
        <p><?= $text_first_mission ?></p>
        <p><?= $number_first_mission ?></p>
    </section>

    <section>
        <h2><?= $title_second_mission ?></h2>
        <p><?= $text_second_mission ?></p>
        <p><?= $number_second_mission ?></p>
    </section>

    <section>
        <h2><?= $title_third_mission ?></h2>
        <p><?= $text_third_mission ?></p>
        <p><?= $number_third_mission ?></p>
    </section>

    <section>
        <h2><?= $title_fourth_mission ?></h2>
        <p><?= $text_fourth_mission ?></p>
        <p><?= $number_fourth_mission ?></p>
    </section>

    <section>
        <img src="<?= $image_first_section['url'] ?>"
             alt="<?= $image_first_section['alt'] ?>"
             width="<?= $image_first_section['width'] ?>"
             height="<?= $image_first_section['height'] ?>"
        >

        <div>
            <h2><?= $first_section_title ?></h2>
            <p><?= $first_text_first_section ?></p>
            <p><?= $first_number_first_section ?></p>
            <p><?= $second_text_first_section ?></p>
            <p><?= $second_number_first_section ?></p>
            <p><?= $third_text_first_section ?></p>
            <p><?= $third_number_first_section ?></p>
        </div>
    </section>
    <section>
        <img src="<?= $image_second_section['url'] ?>"
             alt="<?= $image_second_section['alt'] ?>"
             width="<?= $image_second_section['width'] ?>"
             height="<?= $image_second_section['height'] ?>"
        >
        <div>
            <h2><?= $second_section_title ?></h2>
            <p><?= $first_text_second_section ?></p>
            <p><?= $first_number_second_section ?></p>
            <p><?= $second_text_second_section ?></p>
            <p><?= $second_number_second_section ?></p>
            <p><?= $third_text_second_section ?></p>
            <p><?= $third_number_second_section ?></p>
        </div>
    </section>

<?php get_footer(); ?>