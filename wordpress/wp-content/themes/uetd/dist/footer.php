    </div>
    <?php wp_footer(); ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script>
        $(document).ready(function() {
            $('.phone-wrap').ready(function() {
                // Input sliding
                $('.call-related').wrapAll("<div class='trigger-call' />");
                $('.trigger-call').hide();
                $(".call_input").on('change', function() {
                    if ($('.call_input').is(':checked')) {
                        $('.trigger-call').slideDown(500);
                    } else {
                        $('.trigger-call').slideUp(500);
                    }
                });

                // Placeholders
                $('.name_lastname_input').attr('placeholder', 'Nom et prénom *');
                $('.email_input').attr('placeholder', 'Adresse email *');
                $('.message_input').attr('placeholder', 'Message *');
                $('.phone_input').attr('placeholder', 'Numéro de téléphone');
                $('.date_input').attr('placeholder', 'Date désirée');
            });
        });

        $('a[href^="#"]').click(function(e){
            e.preventDefault();
            var target = this.hash;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': ($target.offset().top)-60
            }, 900, 'swing', function(){
                window.location.hash = target;
            })
        });

        $('.partners__logos').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    </script>
    <script src="<?php bloginfo('template_directory'); ?>/dist/js/app.min.js"></script>
    </body>
</html>