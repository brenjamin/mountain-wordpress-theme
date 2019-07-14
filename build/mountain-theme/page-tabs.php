<?php
    /*
    Template Name: Page with Tabs
    */
    while (have_posts()) {
        the_post();
    }
    get_header();
?>
<div class="page__main">
    <img class="page__img" src="<?php echo get_field('page_image')[url]; ?>" alt="">
    <h1 class="page__h1 u-margin-bottom-lg">
        <span class="page__h1--small"><?php echo get_field('page_small_heading'); ?></span><br>
        <?php echo get_field('page_heading'); ?>
    </h1>
    <p class="page__text">
        <?php echo get_field('page_main_copy'); ?>
    </p>
</div>
<section class="tabset">
    <div class="tabset__tabs-container">
        <div class="tabset__tab tabset__tab--1 active">Volcanic Mountains</div>
        <div class="tabset__tab tabset__tab--2">Fold Mountains</div>
    </div>
    <div class="tabset__content-container">
        <div class="tabset__content tabset__content--1 active">
            <h2 class="tabset__h2">Volcanic Mountains</h2>
            <div class="tabset__info-block">
                <h3 class="tabset__h3">Wow!</h3>
                <p class="tabset__text">Here’s a fairly familiar kind of mountain. Volcanic mountains are created when
                    magma from beneath the Earth makes its way to the surface. When does get the surface, the magma
                    erupts as lava, ash, rock and volcanic gases. This material builds up around the volcanic vent,
                    building up a mountain. Some of the largest mountains in the world were created this way, including
                    Mauna Loa and Mauna Kea on the Big Island of Hawaii. Other familiar volcanoes are Mt. Fuji in Japan
                    and Mt. Rainier in the US.</p>

            </div>
            <div class="tabset__info-block">
                <h3 class="tabset__h3">OMG!</h3>
                <p class="tabset__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Consequat interdum varius sit amet mattis vulputate
                    enim nulla aliquet. Tellus cras adipiscing enim eu turpis egestas. Libero justo laoreet sit amet
                    cursus sit amet dictum. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque
                    purus. Duis convallis convallis tellus id interdum. Tempus iaculis urna id volutpat. Fames ac turpis
                    egestas sed tempus. Faucibus turpis in eu mi bibendum neque egestas. Malesuada proin libero nunc
                    consequat interdum.</p>

            </div>
            <div class="tabset__info-block">
                <h3 class="tabset__h3">Lol!</h3>
                <p class="tabset__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Consequat interdum varius sit amet mattis vulputate
                    enim nulla aliquet. Tellus cras adipiscing enim eu turpis egestas. Libero justo laoreet sit amet
                    cursus sit amet dictum. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque
                    purus. Duis convallis convallis tellus id interdum. Tempus iaculis urna id volutpat. Fames ac turpis
                    egestas sed tempus. Faucibus turpis in eu mi bibendum neque egestas. Malesuada proin libero nunc
                    consequat interdum.</p>

            </div>
        </div>
        <div class="tabset__content tabset__content--2">
            <h2 class="tabset__h2">Fold Mountains</h2>
            <div class="tabset__info-block">
                <h3 class="tabset__h3">Wow!</h3>
                <p class="tabset__text">The most common type of mountain in the world are called fold mountains. When
                    you see vast mountain ranges stretching on for thousands of kilometers, those are fold mountains.
                    Fold mountains are formed when two of the Earth’s tectonic plates collide head on; like two cars
                    crashing together. The edges of each tectonic plate crumple and buckle, and these create the
                    mountains. Some examples of fold mountain ranges include the Rocky Mountains in North America, and
                    the Himalayan Mountains in Asia.</p>

            </div>
            <div class="tabset__info-block">
                <h3 class="tabset__h3">OMG!</h3>
                <p class="tabset__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Consequat interdum varius sit amet mattis vulputate
                    enim nulla aliquet. Tellus cras adipiscing enim eu turpis egestas. Libero justo laoreet sit amet
                    cursus sit amet dictum. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque
                    purus. Duis convallis convallis tellus id interdum. Tempus iaculis urna id volutpat. Fames ac turpis
                    egestas sed tempus. Faucibus turpis in eu mi bibendum neque egestas. Malesuada proin libero nunc
                    consequat interdum.</p>

            </div>
            <div class="tabset__info-block">
                <h3 class="tabset__h3">Lol!</h3>
                <p class="tabset__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Consequat interdum varius sit amet mattis vulputate
                    enim nulla aliquet. Tellus cras adipiscing enim eu turpis egestas. Libero justo laoreet sit amet
                    cursus sit amet dictum. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque
                    purus. Duis convallis convallis tellus id interdum. Tempus iaculis urna id volutpat. Fames ac turpis
                    egestas sed tempus. Faucibus turpis in eu mi bibendum neque egestas. Malesuada proin libero nunc
                    consequat interdum.</p>

            </div>
        </div>
    </div>
</section>


<?php the_content(); ?>
<?php  get_footer(); ?>