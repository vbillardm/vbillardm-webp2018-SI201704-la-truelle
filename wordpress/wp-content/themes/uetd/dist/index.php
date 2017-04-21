<section class="header">
    <span onclick="openNav()">open</span>

    <header class="header__bar">
        <h2 class="header__title">U&D</h2>
        <img class="header__logo" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/Logo-1.png" alt="U&D">
        <div class="header__rowmenu">
            <div class="header__rowitem"><a class="header__rowlink" href="#"><?php the_field("header_menu1"); ?></a></div>
            <div class="header__rowitem"><a class="header__rowlink" href="#"><?php the_field("header_menu2"); ?></a></div>
            <div class="header__rowitem"><a class="header__rowlink" href="#"><?php the_field("header_menu3"); ?></a></div>
            <div class="header__rowitem"><a class="header__rowlink" href="#"><?php the_field("header_menu4"); ?></a></div>
            <div class="header__rowitem"><a class="header__rowlink" href="#"><?php the_field("header_menu5"); ?></a></div>
        </div>
        <div class="header__burger" onclick="openNav()">
            <img class="header__cheeseBurger" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/menu-burger-e1492740390879.png" alt="Menu">
        </div>
    </header>

    <div id="header__sidenav" class="header__sidenav">
        <a href="javascript:void(0)" class="header__close" onclick="closeNav()">
            <img class="header__baconBurger" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/menu-closed-e1492740858657.png" alt="">
        </a>
        <ul class="header__menu">
            <li class="header__item"><a class="header__link" href="#"><?php the_field("header_menu1"); ?></a></li>
            <li class="header__item"><a class="header__link" href="#"><?php the_field("header_menu2"); ?></a></li>
            <li class="header__item"><a class="header__link" href="#"><?php the_field("header_menu3"); ?></a></li>
            <li class="header__item"><a class="header__link" href="#"><?php the_field("header_menu4"); ?></a></li>
            <li class="header__item"><a class="header__link" href="#"><?php the_field("header_menu5"); ?></a></li>
        </ul>
    </div>
</section>
<div id="main">
<section class="landing">
    <div class="landing__background">
        <video class="landing__video" loop muted autoplay poster="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/img-principale-1.jpg" class="fullscreen-bg__video">
            <source src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/EF_video-home_v2_web.webm" type="video/webm">
        </video>
        <div class="landing__container">
            <div class="landing__content">
                <h1 class="landing__title"><?php the_field("landing_title"); ?></h1>
                <p class="landing__subtitle"><?php the_field("landing_subtitle"); ?></p>
            </div>
            <a href="#contact"><button class="landing__contact">Nous contacter</button></a>
            <button class="landing__button">
                <img class="landing__arrow" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/arrow-angle.png">
            </button>
        </div>
    </div>
</section>

<section class="about">
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
<?php
    $image1 = get_field('expertise_image1');
    $image2 = get_field('expertise_image2');
    $image3 = get_field('expertise_image3');
    $image4 = get_field('expertise_image4');
?>

<section class="expertise">
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
    <button class="expertise__contact">Nous contacter</button>
</section>
<section class="counters" style="background: url('http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/img-principale-1.jpg'); background-size: cover;">
    <div class="counters__container">
        <h2 class="counters__title"><?php the_field("counters_title"); ?></h2>
        <p class="counters__subtitle"><?php the_field("counters_subtitle"); ?></p>
        <div class="counters__numbers">
            <div class="counters__numbers_container">
                <p class="counters__number"><?php the_field("counters_number1"); ?></p>
                <p class="counters__label"><?php the_field("counters_label1"); ?></p>
            </div>
            <div class="counters__numbers_container">
                <p class="counters__number"><?php the_field("counters_number2"); ?></p>
                <p class="counters__label"><?php the_field("counters_label2"); ?></p>
            </div>
            <div class="counters__numbers_container">
                <p class="counters__number"><?php the_field("counters_number3"); ?></p>
                <p class="counters__label"><?php the_field("counters_label3"); ?></p>
            </div>
            <div class="counters__numbers_container">
                <p class="counters__number"><?php the_field("counters_number4"); ?></p>
                <p class="counters__label"><?php the_field("counters_label4"); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="partners">
    <h2 class="partners__title"><?php the_field("partners_title"); ?></h2>
    <p class="partners__subtitle"><?php the_field("partners_subtitle"); ?></p>
    <div class="partners__logos">

    </div>
</section>
<section class="contact">
    <h1 class="contact__title">Contactez-nous</h1>
    <p class="contact__subtitle">Vous avez une question ou une demande d'information ?</p>
    <?php
    if (function_exists('ninja_forms_display_form')) {
        ninja_forms_display_form(3);
    }
    ?>
</section>

<section class="footer">
    <div class="footer__top">
        <h2 class="footer__company">U&D</h2>
        <div class="footer__contact">
            <p class="footer__address">23 avenue carnot 93140 BONDY</p>
            <p class="footer__phone">Tél : +33 1 54 38 39 91</p>
            <p class="footer__mail">info@uandb.com</p>
            <a class="footer__legals" href="#">Mentions Légales</a>
        </div>
    </div>
</section>
