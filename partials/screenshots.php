<!--Screen section starts -->
<section class="screenshots" id="screenshots">
    <!--Screen wrap starts -->
    <div class="screenshots__box wrap">
        <!--Screen gram box starts-->
        <div class="gram__box">
                <!--Gram box heading-->
                <div class="gram__box__section-heading">
                    <h2><?php the_field('as_section_title');?></h2>
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
                    <p><?php the_field('as_section_description');?></p>
                </div>
        </div>
        <!--Screen section gram box ends-->
        <!--Screen section screenshoot gallery box-->
        <div class="screenshots__box__gallery findSection">
          <?php
          $createRadio = 0;
          if(have_rows('as_image_block_repeater')):
            // loop through the rows of data
              while (have_rows('as_image_block_repeater')): the_row();
          ?>
            <!--Photo gallery block-->
            <div class="screenshots__box__gallery mySlides fadeEffect">
                <?php

                if(have_rows('image_repeater')):
                  // loop through the rows of data
                    while (have_rows('image_repeater')): the_row();
                    $image = get_sub_field('image');
                ?>
                <div class="screenshots__box__items">
                    <img src="<?php echo $image['sizes']['large']; ?>" alt="Phone">
                </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
            <?php
                $createRadio++;
                endwhile;
            endif;
            ?>
            <!--Photo gallery block ends-->
         </div>
         <!--Screen section screenshoot gallery box end-->
         <!--Screen section radio buttons div-->
         <div class="box__radio">
            <?php
            $currenctSlide = 1;
              for ($x = 1; $x <= $createRadio; $x++) {
                ?>
                <div class="box__radio--button">
                    <label class="radio__button">
                        <input type="radio" name="radio" class="radiobtn" onclick="currentSlide(<?php echo $currenctSlide ?>)" <?php if ( $currenctSlide == '1') { echo 'checked'; }; ?>  >
                        <span class="checkmark"></span>
                    </label>
                </div>
                 <?php 
                 $currenctSlide++;
              }
              ?>
         </div>
            <!--Screen section radio buttons div end-->
    </div>
    <!--Screen wrap ends -->
<!--Screen section ends -->
</section>
