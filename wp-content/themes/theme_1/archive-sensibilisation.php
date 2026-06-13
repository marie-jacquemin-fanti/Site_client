<?php get_header(); ?>
<?php $title_page_principal = get_field('title_page_principal'); ?>

    <main itemscope itemtype="https://schema.org/CollectionPage">

<?= $title_page_principal ?>

    <!-- Afficher toutes les sensibilisations -->
    <section class="home-plai__section home-plai__section--sensibilisations">
        <h2 class="home-plai__title">Mes sensibilisations</h2>

        <ul class="home-plai__list">
            <?php $position = 1; ?>
            <?php if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post();
                    $trouble = get_field('trouble');
                    ?>
                    <li class="home-plai__list-item project__container" itemscope
                        itemtype="https://schema.org/CreativeWork"
                        itemprop="itemListElement">

                        <meta itemprop="position" content="<?= $position++ ?>">

                        <?php if ($trouble): ?>
                            <a class="home-plai__link" href="<?= get_permalink() ?>" itemprop="url">
                                <h3 class="project__title" itemprop="name"><?= $trouble ?></h3>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </section>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>