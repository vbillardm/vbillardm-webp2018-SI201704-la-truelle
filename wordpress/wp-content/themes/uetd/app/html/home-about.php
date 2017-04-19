<section class="about">
    <h2><?php the_field("about_title"); ?></h2>
    <div class="about__middle">
        <h3>L'entreprise U&D</h3>
        <p>
            <?php the_field("about_text1"); ?>
        </p>
        <img src="<?php echo wp_get_attachment_image_src(get_field('about_image'), 'square', false) ?>" alt="lol">
        <img src="<?php echo wp_get_attachment_image_src(get_field('about_image'), 'square', false) ?>" alt="lol">
        <img src="<?php echo wp_get_attachment_image_src(get_field('about_image'), 'square', false) ?>" alt="lol">
        <img src="<?php echo wp_get_attachment_image_src(get_field('about_image'), 'square', false) ?>" alt="lol">
    </div>
    <div class="about__bottom">
        <div class="about__bottom_left">
            <h3>Notre équipe</h3>
            <p>
                <?php the_field("about_text2"); ?>
            </p>
        </div>
        <div class="about__bottom_right">
            <p>
                <?php the_field("about_text3"); ?>
            </p>
        </div>
    </div>
</section>