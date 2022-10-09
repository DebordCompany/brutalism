<?php get_header(); ?>

    <div class="ours container" >
        <div class="ours_logo">
            <img src="/assets/mdlp.png" alt="" class="ours_logo_img">
        </div>
        <div class="ours_text">
            <div class="ours_text_text">
                <h2>MAX SABOR</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt commodi eum placeat quas corrupti, esse atque inventore exercitationem aperiam. Voluptatibus officiis iste quisquam repudiandae architecto iure, illo autem. Iste, architecto.</p>
            </div>
            <div class="ours_text_img" >
                <img src="/assets/cerdo@4x.png" alt="" width="100%">
            </div>
            
        </div>
    </div>

    <!-- categorias -->
    <section class="categorias container">
        
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();?>
                <a href="<?php the_permalink() ?>" class="categorias_article">
                    <div class="categorias_img">
                        <img src="/assets/pollo@4x.png" alt="">
                    </div>
                    <h3><?php the_title() ?></h3>
            </a>
                <?php endwhile; endif;?>
        
    </section>
    <!-- mapa -->
    <section class="title container">
        <h2>Estamos muy cerca, compruebalo en el mapa.</h2>
    </section>
    <section class="place container">
        <div class="place_iframe ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12151.681300887685!2d-3.6358597!3d40.4106158!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf9c19c8e35aa772!2sMercadito%20de%20la%20Plaza!5e0!3m2!1ses!2ses!4v1664536545759!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="place_filter">

        </div>
    </section>
    <section class="contacto">
        <div class="contacto_exp">
            <div class="contacto_exp_text">

            </div>
            <div class="contacto_exp_img">

            </div>
        </div>
        <div class="llevar">
            <div class="llevar_rrss">

            </div>
            <div class="llevar_form">

            </div>
        </div>
    </section>
    
    </section>

    
    
    
<?php get_footer(); ?>