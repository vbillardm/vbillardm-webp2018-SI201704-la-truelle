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