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

<section class="counters">
    <h2 class="counters__title"><?php the_field("counters_title"); ?></h2>
    <p class="counters__subtitle"><?php the_field("counters_subtitle"); ?></p>
    <div class="counters__numbers">
        <div class="counters__numbers_container">
            <p class="counters__number1">
                <span class="counters__number"><?php the_field("counters_number1"); ?></span>
                <?php the_field("counters_label1"); ?>
            </p>
        </div>
        <div class="counters__numbers_container">
            <p class="counters__number2">
                <span class="counters__number"><?php the_field("counters_number2"); ?></span>
                <?php the_field("counters_label2"); ?>
            </p>
        </div>
        <div class="counters_numbers_container">
            <p class="counters__number3">
                <span class="counters__number"><?php the_field("counters_number3"); ?></span>
                <?php the_field("counters_label3"); ?>
            </p>
        </div>
        <div class="counters__numbers_container">
            <p class="counters__number4">
                <span class="counters__number"><?php the_field("counters_number4"); ?></span>
                <?php the_field("counters_label4"); ?>
            </p>
        </div>
    </div>
</section>
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
<section class="footer">
    <div class="footer__top">
        <span class="footer__company">U&D</span>
        <div class="footer__contact">
            <p class="footer__address">23 avenue carnot 93140 BONDY</p>
            <p class="footer__phone">Tél : +33 1 54 38 39 91</p>
            <p class="footer__fax">Fax : +33 1 54 38 39 93</p>
        </div>
    </div>
</section>
<section class="header">
    <div class="header__navbar">
        <div class="header__logo">
           <!--<img src="<?php //the_field("header_logo"); ?>" alt="Logo du site">-->
        </div>
        <div class="header__menu">
            <ul class="header__menu_list">
                <li class="header__menu_element1"><a href="#"><?php the_field("header_menu1"); ?></a></li>
                <li class="header__menu_element2"><a href="#"><?php the_field("header_menu2"); ?></a></li>
                <li class="header__menu_element3"><a href="#"><?php the_field("header_menu3"); ?></a></li>
                <li class="header__menu_element4"><a href="#"><?php the_field("header_menu4"); ?></a></li>
                <li class="header__menu_element5"><a href="#"><?php the_field("header_menu5"); ?></a></li>
            </ul>
            <button class="header__button"><?php the_field("header_button"); ?></button>
        </div>
    </div>
</section>
<section class="landing">
    <div class="landing__content">
        <h1 class="landing__title"><?php the_field("landing_title"); ?></h1>
        <p class="landing__subtitle"><?php the_field("landing_subtitle"); ?></p>
        <button class="landing__button">Down</button>
    </div>
</section>
<section class="legals">
    <a class="legals__link" href="#">Mentions Légales</a>
</section>

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