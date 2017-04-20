<section class="contact">
    <h1 class="contact__title">Contactez-nous</h1>
    <p class="contact__subtitle">Vous avez une question ou une demande d'information ?</p>
    <?php
    if (function_exists('ninja_forms_display_form')) {
        ninja_forms_display_form(3);
    }
    ?>
</section>
