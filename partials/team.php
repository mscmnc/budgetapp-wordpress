 <!--Team section starts -->
<section class="team" id="team">
     <!--Team wrap starts -->
     <div class="team__box wrap">
         <!--Team gram box starts-->
         <div class="gram__box">
             <!--Gram box heading-->
             <div class="gram__box__section-heading">
                 <h2><?php the_field('st_section_title');?></h2>
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
         <!--Team gram box ends-->
         <!--Team members div starts -->
         <div class="team__box__members findSection">
             <!--1 Member box div -->
             <?php
             if(have_rows('st_team_member_repeater')):
              // loop through the rows of data
                while (have_rows('st_team_member_repeater')): the_row();
                $image = get_sub_field('photo');
                // $alt = get_sub_field('alt_attribute');
                // dump($alt);
                ?>
                <div class="member__box">
                    <!-- Member photo -->
                    <div class="member__box__photo">
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_sub_field('alt_attribute'); ?>">
                    </div>
                    <!-- Member name -->
                    <div class="member__box__title">
                        <div class="member__box__title--name">
                            <span><?php the_sub_field('name'); ?></span>
                        </div>
                        <!--1 Member position -->
                        <div class="member__box__title--position">
                            <span><?php the_sub_field('position'); ?></span>
                        </div>
                    </div>
                    <!-- Member socials -->
                    <div class=member__box__social>
                        <ul>
                          <?php
                          if(have_rows('socials_links_repeater')):
                           // loop through the rows of data
                             while (have_rows('socials_links_repeater')): the_row();
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
                    <!-- Member socials ends -->
                </div>
                <!-- Member box div ends -->
                    <?php
                endwhile;
            endif;
            ?>


         </div>
         <!--Team members div ends -->
     </div>
     <!--Team wrap ends -->
 <!--Team section ends -->
 </section>
