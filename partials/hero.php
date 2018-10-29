<header class="header" id="home">
  <!--Header box starts-->
  <div class="header__box wrap">
   <!--Header left side starts-->
   <div class="header__box__left">
       <!--Header left side heading-->
       <div class="header__box__left--heading">
           <div class="header__box__left--heading__top">
               <span><?php the_field('hh_background-heading'); ?></span><br>
           </div>
           <!--Header left side heading h1-->
           <div>
               <h1 class="header__box__left--heading__down"><span class="bold-text"><?php the_field('hh_background-title'); ?></span></h1>
           </div>
       </div>
       <!--Header left side paragraph-->
       <div class="header__box__left--paragraph">
          <p><?php the_field('hh_background_content'); ?></p>
      </div>
       <!--Header left side buttons div-->
       <div class="btn-box">
           <?php
           if(have_rows('hh_background_button_repeater')):
                   // loop through the rows of data
                     while (have_rows('hh_background_button_repeater')): the_row();
                         // display a sub field value
                         $link = get_sub_field('link');
                         $image = get_field('hh_background_content_image');
                          // dump($image);
                         if($link['target']=="_blank") {
                           $target = ' target="_blank"';
                         } else {
                           $target = '';
                         }
                         ?>
                         <div class="btn">
                             <a  class="btn-transp" href="<?php  echo $link['url'] ?>" <?php echo $target; ?>>
                               <?php echo $link['title']; ?> </a>
                         </div>
                         <?php
                     endwhile;
                 endif;
           ?>
       </div>
   </div>
   <!--Header left side ends-->
   <!--Header right side starts-->
   <div class="header__box__right">
       <img src="<?php echo $image['sizes']['large']; ?>" alt="Double phone image">
   </div>
  </div>
<!--Header box ends-->
</header>
<!--Header ends-->
