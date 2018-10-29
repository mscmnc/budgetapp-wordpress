<!--Prices section starts -->
<section class="prices" id="prices">
    <!--Prices wrap starts -->
    <div class="wrap">
        <!--Prices gram box starts-->
        <div class="gram__box">
            <!--Gram box heading-->
            <div class="gram__box__section-heading">
                <h2><?php the_field('op_section_title');?></h2>
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
                <p><?php the_field('op_section_description');?></p>
            </div>
        </div>
        <!--Prices gram box ends-->
        <!--Prices plan box starts-->
        <div class="prices__box findSection">
          <?php
          if(have_rows('op_plan_box_repeater')):
        // loop through the rows of data
            while (have_rows('op_plan_box_repeater')): the_row();
            $link = get_sub_field('link');
             // dump($image);
            if($link['target']=="_blank") {
              $target = ' target="_blank"';
            } else {
              $target = '';
            }
              ?>
              <!--Prices plan box -->
              <div class="prices__box__div">
                  <div class="plan">
                      <span><?php the_sub_field('title');?></span>
                  </div>
                  <?php
                  if(have_rows('Description_repeater')):
                // loop through the rows of data
                    while (have_rows('Description_repeater')): the_row();
                    ?>
                      <div class="plandesc">
                          <?php the_sub_field('punktas');?>
                      </div>
                    <?php
                      endwhile;
                    endif;
                    ?>

                  <div class="blue--button">
                      <a class="blue--button--div" href="<?php  echo $link['url'] ?>" <?php echo $target; ?>><?php echo $link['title']; ?> </a>
                  </div>
              </div>

              <?php

          endwhile;
      endif;
      ?>
        </div>
        <!--Prices plan box starts-->
    </div>
    <!--Prices wrap ends -->
</section>
<!--Prices section ends -->
