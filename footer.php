<!--Footer section starts -->
<footer class="footer">
    <!--Footer wrap starts -->
    <!--Footer contacts section -->
    <div class="footer__div wrap findSection">
        <!--Footer div left side -->
        <div class="footer__div__desc ">
            <!--Footer logo -->
            <div class="desc--logo">
              <a href="<?php echo site_url(); ?>">
                <?php
                if(get_field('op_logo_type', 'option')):
                  $image  = get_field('op_logo_image', 'option');
                  // dump($image);
                  ?>
                  <img src="<?php echo $image['sizes']['logo'] ?>" alt="<?php bloginfo('name'); ?>">
                  <?php
                else:
                  the_field('op_logo_text', 'option');
                endif;
                ?>
              </a>
            </div>
            <!--Footer paragraphs -->
            <div class="desc--paragraph">
                <?php the_field('sf_left_side_text_area'); ?>
            </div>
            <!--Footer icons -->
            <div class="desc--icons">
              <ul>
                <?php
                if(have_rows('sf_social_icons')):
                  // loop through the rows of data
                    while (have_rows('sf_social_icons')): the_row();

                    $link = get_sub_field('link');
                    // $icon = the_sub_field('icon');
                    // dump($icon);
                    if($link['target']=="_blank") {
                      $target = ' target="_blank"';
                    } else {
                      $target = '';
                    }
                    ?>
                   <li><a href="<?php  echo $link['url'] ?>" <?php echo $target; ?>><?php the_sub_field('icon'); ?></a></li>
                    <?php
                    endwhile;
                endif;
                ?>
              </ul>
            </div>
        </div>
        <!--Footer div center. Map -->
        <div class="footer__div__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4615.60510430726!2d25.28348988562522!3d54.66030115761129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd945b95894029%3A0x7e2499c43b2ccf02!2sLietuvos+kariuomen%C4%97s+Gynybos+%C5%A1tabas!5e0!3m2!1slt!2slt!4v1538421798926" style="border:0" allowfullscreen></iframe>
        </div>
        <!--Footer div right side -->
        <div class="footer__div__contacts">
            <div class="footer__div__contacts--title">
                <h2><?php the_field('sf_right_side_title'); ?></h2>
            </div>
            <?php
            if(have_rows('sf_right_side_contact_field_repeater')):
            // loop through the rows of data
              while (have_rows('sf_right_side_contact_field_repeater')): the_row();
              ?>
              <div class="footer__div__contacts--field">
                  <div class="field--icon"><?php the_sub_field('icon'); ?><span><?php the_sub_field('title'); ?></span></div>
                  <div class="field--text"><span><?php the_sub_field('text'); ?></span></div>
              </div>
              <?php
                  // display a sub field value
              endwhile;
            endif;

            ?>
        </div>
    </div>
    <!--Footer copyrights -->
    <div class="footer__copyright">
            <span><?php the_field('sf_footer_bottom_field'); ?></span>
    </div>
    <!--Footer wrap ends -->
</footer>
<!--Footer Footer ends -->
<?php wp_footer(); ?>

</body>
</html>
