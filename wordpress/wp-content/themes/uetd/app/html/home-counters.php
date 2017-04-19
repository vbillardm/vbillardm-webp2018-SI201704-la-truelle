<section class="counters">
    <h2 class="white"><?php the_field("counters_title"); ?></h2>
    <p class="small white"><?php the_field("counters_subtitle"); ?></p>
    <div class="counters__numbers">
        <div class="counters__numbers_container">
            <p class="small">
                <span class="counters__number"><?php the_field("counters_number1"); ?></span>
                <?php the_field("counters_label1"); ?>
            </p>
        </div>
        <div class="counters__numbers_container">
            <p class="small">
                <span class="counters__number"><?php the_field("counters_number2"); ?></span>
                <?php the_field("counters_label2"); ?>
            </p>
        </div>
        <div class="counters_numbers_container">
            <p class="small">
                <span class="counters__number"><?php the_field("counters_number3"); ?></span>
                <?php the_field("counters_label3"); ?>
            </p>
        </div>
        <div class="counters__numbers_container">
            <p class="small">
                <span class="counters_number"><?php the_field("counters_number4"); ?></span>
                <?php the_field("counters_label4"); ?>
            </p>
        </div>
    </div>
</section>