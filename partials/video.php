<!--Video section starts -->
<section onclick="playPause()" class="video">
    <div class="video__box" >
        <video muted id="video" >
                <source src="<?php the_field('sv_choose_video');?>" type="video/mp4">
                Your browser does not support HTML5 video.
        </video>
    </div>
    <div class="video__bluebackground" >
           <a><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/play.png" alt="Play button"></a>
    </div>
</section>
 <!--Video section ends -->
