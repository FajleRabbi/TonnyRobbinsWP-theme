<div class="site-branding">

    <?php

        $custom_logo_text = cs_get_option('logo_text');
        if(has_custom_logo()){
            the_custom_logo();
        }else if(!empty($custom_logo_text)){ ?>
            <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html($custom_logo_text); ?></a></span>
        <?php
        }else{ ?>
            <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
        <?php
        }
    ?>
</div><!-- .site-branding -->