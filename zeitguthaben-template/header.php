<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zeitguthaben_Template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11"> 

	<?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="<?php echo get_template_directory_uri() ?>/images/logo.jpg" class="logo d-inline-block align-top" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo get_site_url(); ?>/seminare">Seminare</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo get_site_url(); ?>/coachings">Coachings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo get_site_url(); ?>/uber-mich">Über Mich</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo get_site_url(); ?>/blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo get_site_url(); ?>/kontakt">Kontakt</a>
                                </li>
                                <li class="nav-item social-media">
                                    <a class="nav-link" href="#!"><img src="<?php echo get_template_directory_uri() ?>/images/linkedin.svg" alt=""></a>
                                    <a class="nav-link" href="#!"><img src="<?php echo get_template_directory_uri() ?>/images/facebook.svg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
