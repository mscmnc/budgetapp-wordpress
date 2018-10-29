<!-- How it works section starts -->
<section class="hiworks" id="hiworks">
    <div class="hiworks__box wrap">
        <!--How ir works gram box starts-->
        <div class="hiworks__box__gram gram__box">
                <!--Gram box heading-->
                <div class="gram__box__section-heading">
                    <h2><?php the_field('hiw_section_title'); ?></h2>
                </div>
                    <!--Gram box line and dots-->
                    <div class="gram__box__linedot">
                        <div class="gram__box__linedot--line"></div>
                            <div class="gram__box__linedot--circle">
                                <span class="gram__box__linedot--circle--box"></span>
                                <span class="gram__box__linedot--circle--box"></span>
                                <span class="gram__box__linedot--circle--box"></span>
                            </div>
                            <div class="gram__box__linedot--line"></div>
                    </div>
                        <!--Gram box paragraph-->
                    <div class="gram__box__paragraph">
                      <p><?php the_field('hiw_section_description'); ?><p>
                    </div>
        </div>
        <!--How it work section left and right divs -->
        <div class="hiworks__box__divide findSection">
            <!--How it work left side-->
            <!--Topics div starts -->
            <div class="hiworks__box__divide__left">
                <!--Topic -->

                  <?php
                  if(have_rows('hiw_section_topics_repeater')):
                  // loop through the rows of data
                    while (have_rows('hiw_section_topics_repeater')): the_row();
                    $image = get_field('hiw_section_image');
                    $image2 = get_field('hiw_section_image_2');
                    ?>
                    <div class="topic">
                      <div class="topic--heading heading">
                          <h3><?php the_sub_field('heading'); ?></h3>
                      </div>
                      <div class="topic--paragraphs paragraph ">
                          <p><?php the_sub_field('description'); ?></p>
                      </div>
                    </div>
                <?php
                  endwhile;
                endif;
                ?>
            </div>
            <!--Topics div ends -->
            <!--How it work right side starts-->
            <div class="hiworks__box__divide__right">
                <!--Left phone box -->
                <div class="phone__box phone1">
                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_field('hiw_section_image_alt'); ?>">
                </div>
                <!--Right phone box -->
                <div class="phone__box phone2">
                    <img src="<?php echo $image2['sizes']['large']; ?>" alt="<?php the_field('section_image_alt_2'); ?>">
                </div>
            </div>
            <!--How it work right side ends-->
        </div>
        <!--How it work section left and right divs end -->
    </div>
    <!--How it work section box wrap ends -->
</section>
<!--How it work section ends -->
