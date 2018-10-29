<!--Contactus section starts -->
<section class="contactus" id="contactus">
    <!--Contactus wrap starts -->
    <div class="wrap">
        <!--Contact us gram box starts-->
        <div class="gram__box">
            <!--Gram box heading-->
            <div class="gram__box__section-heading">
                <h2><?php the_field('cu_section_title');?></h2>
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
                <p><?php the_field('cu_section_description');?></p>
            </div>
        </div>
        <!--Contact us gram box ends-->
        <!--Contact us form stars -->
        <div class="contactus__form findSection">
          <?php echo do_shortcode(get_field('cu_contact_form_shortcode')); ?>
        </div>        
        <!--Contactus wrap ends -->
    </div>
</section>
<!--Contactus section ends -->
