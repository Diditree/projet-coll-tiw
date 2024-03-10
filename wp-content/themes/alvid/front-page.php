<?php /* Template Name: Accueil / Front-page */ ?>
<?php get_header() ?>

<main>
    <header class="container">
        <div>
            <h1><?php wp_kses_post(the_field('home__header_title')); ?></h1>
            <p><?php wp_kses_post(the_field('home__header_text')); ?></p>
            <p><?php wp_kses_post(the_field('home__header_subtext')); ?></p>

            <div>

                <?php if (have_rows('home__header_button--contact')) : ?>
                    <?php while (have_rows('home__header_button--contact')) : the_row(); ?>
                        <a href="<?php wp_kses_post(the_sub_field('btn--url')); ?>"><?php wp_kses_post(the_sub_field('btn--text')); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if (have_rows('home__header_button--service')) : ?>
                    <?php while (have_rows('home__header_button--service')) : the_row(); ?>
                        <a href="<?php wp_kses_post(the_sub_field('btn--url')); ?>"><?php wp_kses_post(the_sub_field('btn--text')); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
        <img src="<?php wp_kses_post(the_field('home__header_image')); ?>" alt="TODO">
    </header>

    <section class="container">
        <!-- entreprises -->
    </section>

    <section class="container">
        <div>
            <img src="<?php the_field('home__header_image'); ?>" alt="TODO">

            <div>
                <h2>Titre</h2>
                <p>Description</p>
            </div>
        </div>
        <div>
            <div>
                <h2>Titre</h2>
                <p>Description</p>
            </div>
            <img src="#" alt="img">
        </div>
    </section>

    <section class="container">
        <h2>Prestations</h2>
        <!-- offres -->
    </section>

    <section class="container">
        <h2>Contactez-nous</h2>
        <div>
            <!-- gauche -->
        </div>
        <div>
            <!-- formulaire -->
        </div>
    </section>
</main>
<?php get_footer() ?>