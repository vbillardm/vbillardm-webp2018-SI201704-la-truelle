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