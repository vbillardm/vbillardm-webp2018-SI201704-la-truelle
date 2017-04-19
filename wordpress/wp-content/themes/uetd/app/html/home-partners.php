<section class="partners">
    <h2><?php the_field("partners_title"); ?></h2>
    <p class="small"><?php the_field("partners_subtitle"); ?></p>
    <div class="partners__logos">
        <img src="<?php echo wp_get_attachment_image_src(get_field('partners_logo1'), 'square', false) ?>" alt="partner1">
        <img src="<?php echo wp_get_attachment_image_src(get_field('partners_logo2'), 'square', false) ?>" alt="partner2">
        <img src="<?php echo wp_get_attachment_image_src(get_field('partners_logo3'), 'square', false) ?>" alt="partner3">
        <img src="<?php echo wp_get_attachment_image_src(get_field('partners_logo4'), 'square', false) ?>" alt="partner4">
        <img src="<?php echo wp_get_attachment_image_src(get_field('partners_logo5'), 'square', false) ?>" alt="partner5">
    </div>
</section>