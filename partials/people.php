<!--People section starts -->
<section class="people" id="people">
        <!--People wrap starts -->
        <div class="people__wrap wrap">
        <!--People gram box starts-->
        <div class="gram__box">
                <!--Gram box heading-->
                <div class="gram__box__section-heading">
                    <h2><?php the_field('wpas_section_title');?></h2>
                </div>
                    <!--Gram box line and dots-->
                <div class="gram__box__linedot">
                    <div class="gram__box__linedot--line "></div>
                        <div class="gram__box__linedot--circle">
                            <span class="gram__box__linedot--circle--box"></span>
                            <span class="gram__box__linedot--circle--box"></span>
                            <span class="gram__box__linedot--circle--box"></span>
                        </div>
                        <div class="gram__box__linedot--line "></div>
                </div>
                    <!--Gram box paragraph-->
                <div class="gram__box__paragraph ">
                    <p><?php the_field('st_section_description');?></p>
                </div>
        </div>
        <?php
        $createRadio2 = 0;
        if(have_rows('wpas_people_box')):
          // loop through the rows of data
            while (have_rows('wpas_people_box')): the_row();
        ?>
        <!--People gallery box-->
        <div class="people__box mySlides2 fadeEffect">
          <?php
          if(have_rows('people_block_repeater')):
            // loop through the rows of data
              while (have_rows('people_block_repeater')): the_row();
              $image = get_sub_field('picture');
          ?>
            <div class="people__box__div">
                <!--People textbox-->
                <div class="people__textbox">
                    <!--People textbox picture-->
                    <div class="people__textbox__picture">
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="Portrait">
                    </div>
                    <!--People textbox text-->
                    <div class="people__textbox__text">
                        <div class="people__textbox--paragraph paragraph">
                            <p><?php the_sub_field('quote');?></p>
                        </div>
                        <div class="people__textbox--title paragraph">
                            <p><?php the_sub_field('name');?></p>
                        </div>
                    </div>
                </div>
                <!--People textbox end-->
            </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <?php
            $createRadio2++;
            endwhile;
        endif;
        ?>
        <!--People gallery box end-->
        <!--Screen section radio buttons div-->
        <div class="box__radio">
          <?php
          $currenctSlide2 = 1;
            for ($y = 1; $y <= $createRadio2; $y++) {
              ?>
            <div class="box__radio--button">
                <label class="radio__button">
                    <input type="radio" name="radio-people" class="radiobtn2" onclick="currentSlide2(<?php echo $currenctSlide2 ?>)" <?php if ( $currenctSlide2 == '1') { echo 'checked'; }; ?>>
                    <span class="checkmark"></span>
                </label>
            </div>
            <?php
            $currenctSlide2++;
         }
         ?>
        </div>
        <!--Screen section radio buttons div end-->
        </div>
        <!--People wrap ends -->
</section>
<!--People section ends -->
