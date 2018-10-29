<!--Overview section starts-->
<section class="overview" id="about">
   <!--Overview box starts-->
   <div class="overview__box wrap">
       <!--Overview gram box starts-->
       <div class="overview__box__gram gram__box">
           <!--Gram box heading-->
           <div class="gram__box__section-heading">
               <h2><?php the_field('os_section_title');?></h2>
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
                  <p><?php the_field('os_section_description');?></p>
               </div>
       </div>
       <!-- Overview gram box ends-->
       <!-- Overview  4 boxes starts -->
       <div class="overview__box__frame findSection">
           <!-- Frame box -->
           <?php
             if(have_rows('os_section_column_repeater')):
                     // loop through the rows of data
                       while (have_rows('os_section_column_repeater')): the_row();
                       // $icon = get_sub_field('icon');
                       // dump($link);
                           // display a sub field value
                    ?>
                        <div class="overview__box__frame--box">
                          <div class="overview__box__frame--box-icon icons">
                              <?php the_sub_field('icon'); ?>
                          </div>
                          <div class="overview__box__frame--box-title">
                              <h3><?php the_sub_field('column_title'); ?></h3>
                          </div>
                          <div class="overview__box__frame--box-paragraph">
                              <?php the_sub_field('os_column_description'); ?>
                          </div>
                        </div>
                    <?php
                       endwhile;
                   endif;
             ?>

       </div>
       <!-- Overview 4 boxes ends -->
   <!-- Overview box ends -->
   </div>
<!-- Overview section ends -->
</section>
