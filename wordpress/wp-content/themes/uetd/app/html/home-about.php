<section class="about" id="about">
    <h2 class="about__title"><?php the_field("about_title"); ?></h2>
    <div class="about__middle">
        <div class="about__container" style="background: url('http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/about-img.jpg'); background-size: cover;">
            <div class="about__image1"></div>
        </div>
        <h3 class="about__subtitle"><?php the_field("about_subtitle1"); ?></h3>
        <p class="about__text about__text1"><?php the_field("about_text1"); ?></p>
        <img class="about__image about__image2" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/diapo1.jpg" alt="Image carroussel">
        <img class="about__image about__image3" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/diapo2.jpg" alt="Image carroussel">
        <img class="about__image about__image4" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/diapo3.jpg" alt="Image carroussel">
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