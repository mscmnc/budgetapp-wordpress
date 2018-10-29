       <!--Features section starts -->
<section class="features" id="features">
     <!--Features section box -->
     <div class="features__box wrap">
         <!--Features gram box starts-->
         <div class="gram__box">
                 <!--Gram box heading-->
                 <div class="gram__box__section-heading feature-color">
                     <h2><?php the_field('sf_section_title');?></h2>
                 </div>
                     <!--Gram box line and dots-->
                 <div class="gram__box__linedot feature-color">
                     <div class="gram__box__linedot--line feature-color fealine"></div>
                         <div class="gram__box__linedot--circle">
                             <span class="gram__box__linedot--circle--box"></span>
                             <span class="gram__box__linedot--circle--box"></span>
                             <span class="gram__box__linedot--circle--box"></span>
                         </div>
                         <div class="gram__box__linedot--line feature-color fealine"></div>
                 </div>
                     <!--Gram box paragraph-->
                 <div class="gram__box__paragraph feature-color">
                     <p><?php the_field('sf_section_description');?></p>
                 </div>
         </div>
         <!--Features gram box ends-->
         <!--Features big box starts-->
         <div class="features__box__big findSection">
             <!--Features box left side-->
             <div class="features__box__big--left">
                     <!--Features topic-->
                     <div class="features__topic borderline-left-top">
                         <!--Topic textbox -->
                         <div class="features__topic__box textbox">
                             <!--Topic title -->
                             <div class="textbox__title">
                                 <h3><?php the_field('sf_left_side_1_topic');?></h3>
                             </div>
                             <!--Topic paragraph -->
                             <div class="textbox__paragraph paragraph">
                                 <p><?php the_field('sf_left_side_1_description');?></p>
                             </div>
                         </div>
                         <!--Topic textbox ends -->
                         <!--Topic icon -->
                         <div class="features__topic__icon icons-white">
                             <?php the_field('sf_left_side_1_icon');?>
                         </div>
                     </div>
                     <!--Features topic box end-->
                     <!--Features topic-->
                     <div class="features__topic  borderline-left-center">
                         <!--Topic textbox -->
                         <div class="features__topic__box textbox ">
                             <!--Topic title -->
                             <div class="textbox__title">
                                 <h3><?php the_field('sf_left_side_2_topic');?></h3>
                             </div>
                             <!--Topic paragraph -->
                             <div class="textbox__paragraph paragraph ">
                                 <p><?php the_field('sf_left_side_2_description');?></p>
                             </div>
                         </div>
                         <!--Topic textbox ends -->
                         <!--Topic icon -->
                         <div class="features__topic__icon icons-white">
                             <?php the_field('sf_left_side_2_icon');?>
                         </div>
                     </div>
                     <!--Features topic box end-->
                     <!--Features topic-->
                     <div class="features__topic borderline-left-bottom">
                         <!--Topic textbox -->
                         <div class="features__topic__box textbox ">
                             <!--Topic title -->
                             <div class="textbox__title">
                                 <h3><?php the_field('sf_left_side_3_topic');?></h3>
                             </div>
                             <!--Topic paragraph -->
                             <div class="textbox__paragraph paragraph">
                                 <p><?php the_field('sf_left_side_3_description');?></p>
                             </div>
                         </div>
                         <!--Topic textbox ends -->
                         <!--Topic icon -->
                         <div class="features__topic__icon icons-white">
                             <?php the_field('sf_left_side_3_icon');?>
                         </div>
                     </div>
                     <!--Features topic box end-->
             </div>
             <!--Features box left side-->
             <!--Features box center div-->
             <div class="features__box__big--center img">
                <?php $image = get_field('sf_image_in_center'); ?>
                 <img src="<?php echo $image['sizes']['large']; ?>" alt="Phone mockup">
             </div>
             <!--Features box right side-->
             <div class="features__box__big--right">
                 <!--Features topic-->
                 <div class="features__topic borderline-right-top">
                     <!--Topic icon -->
                     <div class="features__topic__icon icons-white">
                         <?php the_field('sf_right_side_1_icon');?>
                     </div>
                     <!--Topic textbox -->
                     <div class="features__topic__box textbox">
                         <!--Topic title -->
                         <div class="textbox__title">
                             <h3><?php the_field('sf_right_side_1_topic');?></h3>
                         </div>
                         <!--Topic paragraph -->
                         <div class="textbox__paragraph paragraph">
                             <p><?php the_field('sf_right_side_1_description');?></p>
                         </div>
                     </div>
                 </div>
                 <!--Topic textbox ends -->
                 <!--Features topic-->
                 <div class="features__topic borderline-right-center">
                     <!--Topic icon -->
                     <div class="features__topic__icon icons-white">
                         <?php the_field('sf_right_side_2_icon');?>
                     </div>
                     <!--Topic textbox -->
                     <div class="features__topic__box textbox ">
                         <!--Topic title -->
                         <div class="textbox__title">
                             <h3><?php the_field('sf_right_side_2_topic');?></h3>
                         </div>
                         <!--Topic paragraph -->
                         <div class="textbox__paragraph paragraph">
                             <p><?php the_field('sf_right_side_2_description');?></p>
                         </div>
                     </div>
                 </div>
                 <!--Topic textbox ends -->
                 <!--Features topic-->
                 <div class="features__topic borderline-right-bottom">
                     <!--Topic icon -->
                     <div class="features__topic__icon icons-white">
                         <?php the_field('sf_right_side_3_icon');?>
                     </div>
                     <!--Topic textbox -->
                     <div class="features__topic__box textbox">
                         <!--Topic title -->
                         <div class="textbox__title">
                             <h3><?php the_field('sf_right_side_3_topic');?></h3>
                         </div>
                         <!--Topic paragraph -->
                         <div class="textbox__paragraph paragraph">
                             <p><?php the_field('sf_right_side_3_description');?></p>
                         </div>
                     </div>
                 </div>
                 <!--Topic textbox ends -->
               </div>
             </div>
             <!--Features right side box end-->
         </div>
         <!--Features big box ends-->
     <!--Features section box -->
 </section>
 <!--Features section ends -->
