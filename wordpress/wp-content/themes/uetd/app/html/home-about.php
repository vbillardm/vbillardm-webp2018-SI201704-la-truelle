<section class="about">
    <h2 class="about__title"><?php the_field("about_title"); ?></h2>
    <div class="about__middle">
        <h3 class="about__subtitle"><?php the_field("about_subtitle1"); ?></h3>
        <p class="about__text about__text1"><?php the_field("about_text1"); ?></p>
        <img class="about__image about__image1" src="<?php echo wp_get_attachment_image_src(get_field('about_image'), 'square', false) ?>" alt="lol">
        <img class="about__image about__image2" src="<?php echo wp_get_attachment_image_src(get_field('about_image'), 'square', false) ?>" alt="lol">
        <img class="about__image about__image3" src="<?php echo wp_get_attachment_image_src(get_field('about_image'), 'square', false) ?>" alt="lol">
        <img class="about__image about__image4" src="<?php echo wp_get_attachment_image_src(get_field('about_image'), 'square', false) ?>" alt="lol">
    </div>
    <div class="about__bottom">
        <div class="about__bottom_left">
            <h3 class="about__subtitle"><?php the_field("about_subtitle2"); ?></h3>
            <p class="about__text about__text2"><?php the_field("about_text2"); ?></p>
        </div>
        <div class="about__bottom_right">
            <p class="about__text about__text3"><?php the_field("about_text3"); ?></p>
        </div>
    </div>
</section>