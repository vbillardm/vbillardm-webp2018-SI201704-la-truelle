<section class="expertise">
    <h2><?php the_field("expertise_title"); ?></h2>
    <p><?php the_field("expertise_subtitle"); ?></p>
    <div class="expertise__pictograms">
        <div class="expertise__pictograms_container">
            <p class="small">
                <?php the_field("expertise_label1"); ?>
            </p>
            <img src="<?php echo wp_get_attachment_image_src(get_field('expertise_image1'), 'square', false) ?>" alt="Building picto">
        </div>
        <div class="expertise__pictograms_container">
            <p class="small">
                <?php the_field("expertise_label2"); ?>
            </p>
            <img src="<?php echo wp_get_attachment_image_src(get_field('expertise_image2'), 'square', false) ?>" alt="Tools picto">
        </div>
        <div class="expertise__pictograms_container">
            <p class="small">
                <?php the_field("expertise_label3"); ?>
            </p>
            <img src="<?php echo wp_get_attachment_image_src(get_field('expertise_image3'), 'square', false) ?>" alt="Bricks picto">
        </div>
        <div class="expertise__pictograms_container">
            <p class="small">
                <?php the_field("expertise_label4"); ?>
            </p>
            <img src="<?php echo wp_get_attachment_image_src(get_field('expertise_image4'), 'square', false) ?>" alt="Helmet picto">
        </div>
    </div>
    <div class="expertise__bottom">
        <div class="expertise__bottom_left">
            <h3><?php the_field("expertise_bottom_title"); ?></h3>
            <p>
                <?php the_field("expertise_bottom_text1"); ?>
            </p>
        </div>
        <div class="expertise__bottom_right">
            <p>
                <?php the_field("expertise_bottom_text2"); ?>
            </p>
        </div>
    </div>
    <button class="expertise__contact">Nous contacter</button>
</section>