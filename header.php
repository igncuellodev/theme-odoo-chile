<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="odoo-header">
  <nav class="odoo-nav">
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="odoo-logo">
      <img 
    src="<?php echo esc_url( get_theme_file_uri('/assets/images/ChileOdoo.svg') ); ?>" 
    alt="ChileOdoo">
    </a>
    <ul class="odoo-nav-list">
      <li class="odoo-list-item">
    <a href="#contacto" class="odoo-link">Contacto</a></li>
      <li class="odoo-list-item"><a href="#" class="odoo-button">Diagnóstico gratis</a></li>
    </ul>
  </nav>
  
</header>