<section class="partners">
    <h2 class="partners__title"><?php the_field("partners_title"); ?></h2>
    <p class="partners__subtitle"><?php the_field("partners_subtitle"); ?></p>
    <div class="partners__logos">
        <img class="partners__logo1" src="<?php echo wp_get_attachment_image_src(get_field('partners_logo1'), 'square', false) ?>" alt="partner1">
        <img class="partners__logo2" src="<?php echo wp_get_attachment_image_src(get_field('partners_logo2'), 'square', false) ?>" alt="partner2">
        <img class="partners__logo3" src="<?php echo wp_get_attachment_image_src(get_field('partners_logo3'), 'square', false) ?>" alt="partner3">
        <img class="partners__logo4" src="<?php echo wp_get_attachment_image_src(get_field('partners_logo4'), 'square', false) ?>" alt="partner4">
        <img class="partners__logo5" src="<?php echo wp_get_attachment_image_src(get_field('partners_logo5'), 'square', false) ?>" alt="partner5">
    </div>
</section>