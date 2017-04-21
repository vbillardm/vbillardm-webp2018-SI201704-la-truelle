    </div>
    <?php wp_footer(); ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    </script>
    <script src="<?php bloginfo('template_directory'); ?>/dist/js/app.min.js"></script>
    </body>
</html>