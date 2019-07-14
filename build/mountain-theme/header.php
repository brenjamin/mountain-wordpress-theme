<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mountain Time</title>
    <?php 
    wp_head(); 
    $parentTitle = strtolower(get_the_title(wp_get_post_parent_id(get_the_ID())));
    ?>
</head>

<body>
    <!--[if lte IE 9]>
	  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
    <p class="browserupgrade ie10">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    
    <!-- Preloader -->
	<div id="preloader" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-color: #fff; z-index: 1090;">
		<?php if ( is_front_page() ) : ?>
	  		<div id="status" style="width: 100px; height: 100px; position: absolute; left: 50%; top: 50%; background-image: url('<?=get_template_directory_uri();?>/css/svg/preloader.svg'); background-repeat: no-repeat; background-position: center; margin: -50px 0 0 -50px;">&nbsp;</div>
	  	<?php endif; ?>
	</div>
    <header class="header">
        <section class="utility">
            <a href="#" class="utility__link modal__open">Mountain Climber Site</a>
            <span> &nbsp;|&nbsp; </span>
            <a href="<?php echo site_url('/sign-up') ?>" class="utility__link <?php if(is_page('sign-up')) echo 'active-link' ?>">Sign Up</a>
        </section>
        <nav class="navigation">
            <div class="navigation__logo"><a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('css/images/mountain-logo.png'); ?>" alt="Mountain logo"></a></div>
            <div class="navigation__menu">
                <ul class="navigation__items">
                    <li class="navigation__item">
                        <a href="<?php echo site_url('/what-is-a-mountain') ?>" class="navigation__link <?php if(is_page('what-is-a-mountain') OR  $parentTitle == 'what is a mountain') echo 'active-link' ?>">What is a mountain?</a>
                        <div class="navigation__dropdown">
                            <a class="navigation__dropdown-link" href="<?php echo site_url('/mountain-facts') ?>">Mountain Facts</a>
                            <a class="navigation__dropdown-link" href="<?php echo site_url('/history-of-mountains') ?>">History of Mountains</a>
                        </div>
                    </li>
                    <li class="navigation__item">
                        <a href="<?php echo site_url('/take-a-trip'); ?>" class="navigation__link <?php if(is_page('take-a-trip') OR  $parentTitle == 'take a trip') echo 'active-link' ?>">Take a trip</a>
                        <div class="navigation__dropdown">
                            <a class="navigation__dropdown-link" href="<?php echo site_url('/trip-ideas') ?>">Trip Ideas For Families</a>
                            <a class="navigation__dropdown-link" href="<?php echo site_url('/deals') ?>">Deals</a>
                        </div>
                    </li>
                    <li class="navigation__item"><a href="<?php echo site_url('/purchase-a-mountain') ?>" class="navigation__link <?php if(is_page('purchase-a-mountain')) echo 'active-link'; ?>">Purchase a mountain</a></li>
                </ul>
            </div>
            <div class="mobile-nav">
                <ul class="mobile-nav__ul">
                    <li class="mobile-nav__item mobile-nav__item--header <?php if(is_page('what-is-a-mountain')) echo 'active-link' ?>"><a class="mobile-nav__link" href="<?php echo site_url('/what-is-a-mountain') ?>">What is a Mountain?</a></li>
                    <li class="mobile-nav__item <?php if(is_page('mountain-facts')) echo 'active-link' ?>"><a href="<?php echo site_url('/mountain-facts') ?>" class="mobile-nav__link">Mountain Facts</a></li>
                    <li class="mobile-nav__item <?php if(is_page('history-of-mountains')) echo 'active-link' ?>"><a href="<?php echo site_url('/history-of-mountains') ?>" class="mobile-nav__link">History of Mountains</a></li>
                </ul>
                <ul class="mobile-nav__ul">
                    <li class="mobile-nav__item mobile-nav__item--header <?php if(is_page('take-a-trip')) echo 'active-link' ?>"><a class="mobile-nav__link" href="<?php echo site_url('/take-a-trip') ?>">Take a Trip</a></li>
                    <li class="mobile-nav__item <?php if(is_page('trip-ideas')) echo 'active-link' ?>"><a href="<?php echo site_url('/trip-ideas') ?>" class="mobile-nav__link">Trip Ideas for Families</a></li>
                    <li class="mobile-nav__item <?php if(is_page('deals')) echo 'active-link' ?>"><a href="<?php echo site_url('/deals') ?>" class="mobile-nav__link">Deals</a></li>
                </ul>
                <ul class="mobile-nav__ul"><li class="mobile-nav__item mobile-nav__item--header <?php if(is_page('purchase-a-mountain')) echo 'active-link' ?>"><a href="<?php echo site_url('/purchase-a-mountain') ?>" class="mobile-nav__link">Purchase a Mountain</a></li></ul>
            </div>
            <div class="mobile-nav__toggle">
                <input type="checkbox" class="mobile-nav__checkbox" id="nav-toggle">
                <label for="nav-toggle" class="mobile-nav__button">
                    <span id="toggle-button">&nbsp;</span>
                </label>
            </div>
        </nav>
    </header>

    <div class="modal">
        <div class="modal__content">
            <div class="modal__text">
                <p class="modal__callout u-margin-bottom-md">You are about to leave the Mountain website for laypeople to visit Mountain Climber Insights, a website specifically designed for mountain climbers.</p>
                <p class="u-margin-bottom-md">Are you sure you want to visit Mountain Climber Insights?</p>
            </div>
            <a class="modal__button u-margin-bottom-md" href="#">Yes, Leave This Website</a>
            <a class="modal__exit" id="modal-exit">No, stay on this page</a>
        </div>
    </div>