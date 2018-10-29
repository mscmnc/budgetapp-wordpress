<!--Getapp section starts -->
<section class="getapp" id="getapp">
    <!--Getapp wrap starts -->
    <div class="wrap">
        <!--Getapp gram box starts-->
        <div class="gram__box">
                <!--Gram box heading-->
                <div class="gram__box__section-heading feature-color">
                    <h2><?php the_field('ga_section_title'); ?></h2>
                </div>
                    <!--Gram box line and dots-->
                <div class="gram__box__linedot">
                    <div class="gram__box__linedot--line  fealine"></div>
                        <div class="gram__box__linedot--circle feature-color">
                            <span class="gram__box__linedot--circle--box"></span>
                            <span class="gram__box__linedot--circle--box"></span>
                            <span class="gram__box__linedot--circle--box"></span>
                        </div>
                        <div class="gram__box__linedot--line fealine"></div>
                </div>
                    <!--Gram box paragraph-->
                <div class="gram__box__paragraph feature-color ">
                    <p><?php the_field('ga_section_description'); ?></p>
                </div>
        </div>
        <!--Getapp gram box ends-->
        <!--Getapp store icons -->
        <div class="getapp__store findSection">
          <?php
          if(have_rows('ga_platform_repeater')):
          // loop through the rows of data
            while (have_rows('ga_platform_repeater')): the_row();
            $image = get_sub_field('image');
            $link = get_sub_field('link');
            // dump($link);
            if($link['target']=="_blank") {
              $target = ' target="_blank"';
            } else {
              $target = '';
            }
          ?>
            <div class="getapp__store--icon">
                <a href="<?php  echo $link['url'] ?>" <?php echo $target; ?>><img  src="<?php echo $image['sizes']['large']; ?>" alt="logo" ></a>
            </div>
            <?php
              endwhile;
            endif;
            ?>
        </div>
        <!--Getapp store icons end-->
        <div class="getapp__newsletter findSection <?php the_field('ga_show_subscriber'); ?>">
            <div class="getapp__newsletter--title">
                <span><?php the_field('ga_subscribe_icon'); ?> <?php the_field('ga_subscribe_text'); ?></span>
            </div>
            <div class="getapp__newsletter--label">
                <input type="email" placeholder="Your Email" ><a href="#" class="subscribe-button">Subscribe</a>
            </div>
        </div>
    </div>
    <!--Getapp wrap ends -->
</section>
<!--Getapp section ends -->
