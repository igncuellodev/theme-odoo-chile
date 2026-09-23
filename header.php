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
    <a href="<?php echo esc_url( home_url('/2') ); ?>" class="odoo-logo">
      <img 
    src="<?php echo esc_url( get_theme_file_uri('/assets/images/ChileOdoo.svg') ); ?>" 
    alt="ChileOdoo" class="odoo-logo-2">
    </a>
    <ul class="odoo-nav-list">
      <li class="odoo-list-item">
    <a href="#contacto" class="odoo-link inactive" aria-label="Ir al formulario de contacto">Contacto</a></li>
      <li class="odoo-list-item"><a href="https://www.solisum.cl/book/mi-diagnosticos-chileodoo" class="odoo-button" aria-label="Enviar mensaje para solicitar diagnóstico">Diagnóstico gratis</a></li>
    </ul>
  </nav>
  
</header>