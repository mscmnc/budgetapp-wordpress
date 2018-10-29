  <?php

  /* Template Name: Homepage */

    get_header();

  ?>

<!-- Start Point -->
    <?php
    get_template_part('partials/hero');
    get_template_part('partials/overview');
    get_template_part('partials/howitworks');
    get_template_part('partials/features');
    get_template_part('partials/screenshots');
    get_template_part('partials/people');
    get_template_part('partials/video');
    get_template_part('partials/team');
    get_template_part('partials/pricing');
    get_template_part('partials/getapp');
    get_template_part('partials/contactus');
      // Prijungiame partials failus
    ?>
  <?php get_footer(); ?>
