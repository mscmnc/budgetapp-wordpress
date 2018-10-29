<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); $favi  = get_field('op_favicon', 'option'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo $favi['sizes']['large'] ?>" />
    <title><?php wp_title(); ?></title>

    <?php
    wp_head();
    $bimage = get_field('hh_background_image');
    ?>
    <script>

        jQuery(window).on('load', function() {
        //Calling loader
        loaderPage();
        });

        // Disable scroll
        jQuery('html').css({
        'overflow': 'hidden',
        'height': '100%'
        })
    </script>
    <style> header { background-image: linear-gradient(to bottom, <?php the_field('hh_background_image_linear_top_color')?>, <?php the_field('hh_background_image_linear_top_color')?>), url(<?php echo $bimage['sizes']['large']; ?>); } </style>
</head >
    <body >
        <!--Loader-->
        <div class="loader"><div class="loader-5 center"><span></span></div></div>
        <script>
            // Calls loader div to show "loading animation"
            var load = document.getElementsByClassName('loader');
            load[0].style.display = "block";
        </script>
        <div class="mobilenavi">
            <input type="checkbox" class="mobilenavi__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="mobilenavi__button">
                <span class="mobilenavi__icon"></span>
            </label>
            <div class="mobilenavi__background">&nbsp;</div>
                <nav class="mobilenavi__nav">
                    <ul class="mobilenavi__list">
                        <li class="mobilenavi__item"><a href="#home" class="mobilenavi__link">Home</a></li>
                        <li class="mobilenavi__item"><a href="#about" class="mobilenavi__link">About</a></li>
                        <li class="mobilenavi__item"><a href="#features" class="mobilenavi__link">Features</a></li>
                        <li class="mobilenavi__item"><a href="#screenshots" class="mobilenavi__link">Screenshots</a></li>
                        <li class="mobilenavi__item"><a href="#prices" class="mobilenavi__link">Pricing</a></li>
                        <li class="mobilenavi__item"><a href="#getapp" class="mobilenavi__link">GetApp</a></li>
                        <li class="mobilenavi__item"><a href="#contactus" class="mobilenavi__link">Contact</a></li>
                    </ul>
                </nav>
        </div>

        <div class="stickybar" >
                <!--Sticky meniu wrap start-->
                <div class="stickybar__div wrap">
                    <!--Logo-->
                    <div class="stickybar__div--logo-box">
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
                    <!--Logo end-->
                    <!--Navigation div starts-->
                    <div class="stickybar__div--navigation" id="headerMenu">
                        <nav>
                          <?php
                            $args = [
                              'container' => false,
                              'theme_location' => 'primary-navigation'


                            ];

                            wp_nav_menu($args);

                          ?>

                            <!--Meniu items start-->
                            <!-- <ul>
                                <li class="stickybar__navigation--item homebtn">
                                    <a href="#home" class="stickybar__navigation--item--link">Home</a>
                                </li>
                                <li class="stickybar__navigation--item">
                                    <a href="#about" class="stickybar__navigation--item--link">About</a>
                                </li>
                                <li class="stickybar__navigation--item">
                                    <a href="#features" class="stickybar__navigation--item--link">Features</a>
                                </li>
                                <li class="stickybar__navigation--item">
                                    <a href="#screenshots" class="stickybar__navigation--item--link">Screenshots</a>
                                </li>
                                <li class="stickybar__navigation--item">
                                    <a href="#prices" class="stickybar__navigation--item--link">Pricing</a>
                                </li>
                                <li class="stickybar__navigation--item getappbtn">
                                    <a href="#getapp" class="stickybar__navigation--item--link">GetApp</a>
                                </li>
                                <li class="stickybar__navigation--item contactbtn">
                                    <a href="#contactus" class="stickybar__navigation--item--link">Contact</a>
                                </li>
                            </ul> -->
                            <!--Meniu items end-->
                        </nav>
                    </div>
                    <!--Navigation div ends-->
                </div>
                <!--Sticky meniu wrap end-->
        </div>
