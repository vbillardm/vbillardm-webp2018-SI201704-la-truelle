<section class="header">
    <span onclick="openNav()">open</span>

    <header class="header__bar">
        <h2 class="header__title">U&D</h2>
        <img class="header__logo" src="http://u-d.ivanprunier.fr/wp-content/uploads/2017/04/Logo-2.png" alt="U&D">
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