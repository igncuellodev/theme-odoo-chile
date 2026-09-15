<?php get_header(); ?>

<section class="odoo-hero">
    <div class="odoo-hero-content">
        <h1 class="odoo-hero-title">Odoo a la medida de tu empresa, con <span class="highlight"> datos alojados en Chile</span></h1>
        <p class="text-hero">Odoo con licencias, hosting dedicado en Chile, implementación y capacitación a medida. Todo en un solo proveedor, con precio transparente y sin alojar tus datos fuera del país.</p>
        <a class="odoo-button hero-button">Quiero mi diagnostico gratuito</a>
        <p class="text-hero">Sin costo. Sin compromiso. 20 minutos con un especialista.</p>
    </div>


    <div class="dashboard-icons">
        <div class="icons-left">
            <div class="icon1">
                 <img src="<?php echo esc_url( get_theme_file_uri('/assets/images/shopping-cart.svg') ); ?>" alt="shopping cart icon">
            </div>

            <div class="icon2">
                <img src="<?php echo esc_url( get_theme_file_uri('/assets/images/bag.svg') ); ?>" alt="shopping bag icon">
            </div>
        </div>

        <div class="icons-right">
            <div class="icon3">
                 <img src="<?php echo esc_url( get_theme_file_uri('/assets/images/camion.svg') ); ?>" alt="shopping cart icon">
            </div>

            <div class="icon4">
                 <img src="<?php echo esc_url( get_theme_file_uri('/assets/images/warehouse.svg') ); ?>" alt="shopping cart icon">
            </div>
        
        </div>
    </div>

    <img src="<?php echo esc_url( get_theme_file_uri('/assets/images/dashboard.webp') ); ?>" alt="" class="dashboard-image">
</section>


<section class="value-section">
    <ul class="value-tags">
        <li class="tag"><img src="<?php echo esc_url( get_theme_file_uri ('/assets/images/chile.svg')); ?>" alt="" class="tag-img">Datos alojados 100% en Chile</li>
        <li class="tag"><img src="<?php echo esc_url( get_theme_file_uri ('/assets/images/certificate.svg')); ?>" alt="" class="tag-img">Cumplimiento normativo</li>
        <li class="tag"><img src="<?php echo esc_url( get_theme_file_uri ('/assets/images/globe.svg')); ?>" alt="" class="tag-img">+13 millones de usuarios</li>
        <li class="tag"><img src="<?php echo esc_url( get_theme_file_uri ('/assets/images/hat.svg')); ?>" alt="" class="tag-img">Capacitación de equipo</li>
    </ul>


    <ul class="certifications">
        <li class="certifcate"><img height="60px" src="<?php echo esc_url(get_theme_file_uri('/assets/images/iso.webp')); ?>"></li>
        <li class="certifcate"><img height="60px" src="<?php echo esc_url(get_theme_file_uri('/assets/images/tier-4.webp')); ?>"></li>
        <li class="certifcate"><img height="60px" src="<?php echo esc_url(get_theme_file_uri('/assets/images/tier-3.webp')); ?>"></li>
        <li class="certifcate"><img width="100px" src="<?php echo esc_url(get_theme_file_uri('/assets/images/itil.webp')); ?>"></li>
        <li class="certifcate"><img width="100px"  src="<?php echo esc_url(get_theme_file_uri('/assets/images/mtcse.webp')); ?>"></li>
        <li class="certifcate"><img width="100px" src="<?php echo esc_url(get_theme_file_uri('/assets/images/mtcre.webp')); ?>"></li>
        <li class="certifcate"><img width="100px" src="<?php echo esc_url(get_theme_file_uri('/assets/images/mtcna.webp')); ?>"></li>
        
    </ul>

</section>


<section class="problem-section">
    <div class="problem-content">
        <div class="problem-text">
            <h2 class="dark-main-title">Si hoy <span class="highlight">manejas tu empresa</span> entre Excel, WhatsApp y sistemas desconectados, <span class="highlight">no estás solo.</span></h2>

        <p class="text">Muchas pymes en Santiago llegan a un punto en que Excel, WhatsApp y sistemas desconectados hacen perder tiempo, duplican tareas y dificultan ver el negocio completo. Además, las nuevas exigencias de protección de datos y ciberseguridad ya impactan a empresas de cualquier tamaño que manejen datos de clientes o empleados.</p>

        </div>
    <div class="card-grid">
        <div class="card">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/redundancia.svg')); ?>" alt="">
            <h3 class="card-title">Redundancia de herramientas que no se integran entre sí</h3>
        </div>
         <div class="card">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/redundancia.svg')); ?>" alt="">
            <h3 class="card-title">Redundancia de herramientas que no se integran entre sí</h3>
        </div>

         <div class="card">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/redundancia.svg')); ?>" alt="">
            <h3 class="card-title">Redundancia de herramientas que no se integran entre sí</h3>
        </div>

        <div class="card-bottom">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/redundancia.svg')); ?>" alt="">
            <h3 class="card-title">Redundancia de herramientas que no se integran entre sí</h3>
        </div>

        <div class="card-bottom">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/redundancia.svg')); ?>" alt="">
            <h3 class="card-title">Redundancia de herramientas que no se integran entre sí</h3>
        </div>

    </div>    
    

    </div>

</section>


<?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();

            the_content();

        endwhile;
    endif;
    ?>


<?php get_footer(); ?>