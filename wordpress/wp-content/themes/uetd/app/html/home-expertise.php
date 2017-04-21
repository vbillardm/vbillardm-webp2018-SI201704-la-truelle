<?php
    $image1 = get_field('expertise_image1');
    $image2 = get_field('expertise_image2');
    $image3 = get_field('expertise_image3');
    $image4 = get_field('expertise_image4');
?>

<section class="expertise" id="expertise">
    <h2 class="expertise__title"><?php the_field("expertise_title"); ?></h2>
    <p class="expertise__subtitle"><?php the_field("expertise_subtitle"); ?></p>
    <div class="expertise__pictograms">
        <div class="expertise__pictograms_container">
            <p class="expertise__pictogram"><?php the_field("expertise_label1"); ?></p>
            <img class="expertise__image" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/gros-oeuvre.png" alt="Building picto">
        </div>
        <div class="expertise__pictograms_container">
            <p class="expertise__pictogram"><?php the_field("expertise_label2"); ?></p>
            <img class="expertise__image" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/etancheite.png" alt="Tools picto">
        </div>
        <div class="expertise__pictograms_container">
            <p class="expertise__pictogram"><?php the_field("expertise_label3"); ?></p>
            <img class="expertise__image" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/brick.png" alt="Bricks picto">
        </div>
        <div class="expertise__pictograms_container">
            <p class="expertise__pictogram"><?php the_field("expertise_label4"); ?></p>
            <img class="expertise__image" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/pavage.png" alt="Helmet picto">
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
    <a href="#contact" class="expertise__contact">Nous contacter</a>
</section>