<section class="expertise">
    <h2 class="expertise__title"><?php the_field("expertise_title"); ?></h2>
    <p class="expertise__subtitle"><?php the_field("expertise_subtitle"); ?></p>
    <div class="expertise__pictograms">
        <div class="expertise__pictograms_container1">
            <p class="expertise__pictogram"><?php the_field("expertise_label1"); ?></p>
            <img class="expertise__image" src="<?php echo wp_get_attachment_image_src(get_field('expertise_image1'), 'square', false) ?>" alt="Building picto">
        </div>
        <div class="expertise__pictograms_container2">
            <p class="expertise__pictogram"><?php the_field("expertise_label2"); ?></p>
            <img class="expertise__image" src="<?php echo wp_get_attachment_image_src(get_field('expertise_image2'), 'square', false) ?>" alt="Tools picto">
        </div>
        <div class="expertise__pictograms_container3">
            <p class="expertise__pictogram"><?php the_field("expertise_label3"); ?></p>
            <img class="expertise__image" src="<?php echo wp_get_attachment_image_src(get_field('expertise_image3'), 'square', false) ?>" alt="Bricks picto">
        </div>
        <div class="expertise__pictograms_container4">
            <p class="expertise__pictogram"><?php the_field("expertise_label4"); ?></p>
            <img class="expertise__image" src="<?php echo wp_get_attachment_image_src(get_field('expertise_image4'), 'square', false) ?>" alt="Helmet picto">
        </div>
    </div>
    <div class="expertise__bottom">
        <div class="expertise__bottom_left">
            <h3 class="expertise__subtitle2"><?php the_field("expertise_bottom_title"); ?></h3>
            <p class="expertise__text1"><?php the_field("expertise_bottom_text1"); ?></p>
        </div>
        <div class="expertise__bottom_right">
            <p class="expertise__text2"><?php the_field("expertise_bottom_text2"); ?></p>
        </div>
    </div>
    <button class="expertise__contact">Nous contacter</button>
</section>