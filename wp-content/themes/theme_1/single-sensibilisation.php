<?php get_header(); ?>

    <main>
        <?php while (have_posts()): the_post();
            $trouble = get_field('trouble');
            $effet = get_field('effet');
            $consequence = get_field('consequence');
            $link = get_field('link');
            ?>
            <article itemscope itemtype="https://schema.org/CreativeWork">
                <?php if ($trouble): ?>
                    <h1 itemprop="name"><?= $trouble ?></h1>
                <?php endif; ?>
                <section class="home-plai__content home-plai__section--steps">

                    <?php if ($effet): ?>
                        <p class="home-plai__text" itemprop="description"><strong>Ce que ça crée
                                :</strong> <?= $effet ?>
                        </p>
                    <?php endif; ?>

                    <?php if ($consequence): ?>
                        <p class="home-plai__text"><strong>Si on ne fait rien :</strong> <?= $consequence ?></p>
                    <?php endif; ?>
                    <div>
                        <?php if ($link): ?>
                            <a class="home-plai__link" href="<?= $link['url'] ?>" itemprop="url">
                                <?= $link['title'] ?: 'Découvrir l\'outil' ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </section>
            </article>
        <?php endwhile; ?>
    </main>

<?php get_footer(); ?>