<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mountain Time</title>
    <?php wp_head(); ?>
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
    <header class="hero">
        <section class="utility">
            <a href="#" class="utility__link modal__open">Mountain Climber Site</a>
            <span> &nbsp;|&nbsp; </span>
            <a href="<?php echo site_url('/sign-up') ?>" class="utility__link">Sign Up</a>
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
                    <li class="navigation__item <?php if(is_page('purchase-a-mountain')) echo 'active-link'; ?>"><a href="<?php echo site_url('/purchase-a-mountain') ?>" class="navigation__link">Purchase a mountain</a></li>
                </ul>
            </div>
            <div class="mobile-nav">
                <ul class="mobile-nav__ul">
                    <li class="mobile-nav__item mobile-nav__item--header <?php if(is_page('what-is-a-mountain')) echo 'active-link' ?>"><a class="mobile-nav__link" href="<?php echo site_url('/what-is-a-mountain') ?>">What is a Mountain?</a></li>
                    <li class="mobile-nav__item <?php if(is_page('mountain-facts')) echo 'active-link' ?>"><a href="<?php echo site_url('/mountain-facts') ?>" class="mobile-nav__link">Mountain Facts</a></li>
                    <li class="mobile-nav__item <?php if(is_page('history-of-mountains')) echo 'active-link' ?>"><a href="<?php echo site_url('/history-of-mountains') ?>" class="mobile-nav__link">History of Mountains</a></li>
                </ul>
                <ul class="mobile-nav__ul">
                    <li class="mobile-nav__item mobile-nav__item--header"><a class="mobile-nav__link" href="<?php echo site_url('/take-a-trip') ?>">Take a Trip</a></li>
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
        <section class="hero__headline">
            <h1 class="hero__h1">It's Mountain Time.</h1>
            <a href="#" class="hero__button">Learn More</a>
        </section>
        
    </header>
    <section class="callout">
            <p class="callout__text">Many mountains were formed as a result of Earth's tectonic plates smashing together. The Earth's crust is made up of multiple tectonic plates that still move today as a result of geologic activity below the surface.
            When two tectonic plates converge, their edges can crumple kind of like an aluminum can does when you crush it. The result of these tectonic plates crumpling is huge slabs or rock being pushed up into the air.</p> 
    </section>
    <section class="features">
        <h2 class="features__heading u-margin-bottom-md">This website can help you:</h2>
        <div class="features__container"> 
            <div class="features__box">
                <div class="features__box-text u-margin-bottom-sm">Learn about mountains</div>
                <div class="mountain">
                    <div class="mountain-top">
                        <div class="mountain-cap-1"></div>
                        <div class="mountain-cap-2"></div>
                        <div class="mountain-cap-3"></div>
                    </div>
                    <div class="cloud"></div>
                </div>
                <a class="features__button" href="#">
                    <img src="<?php echo get_theme_file_uri('css/svg/chevron-right.svg'); ?>"></img>
                </a>
            </div>
            <div class="features__box">
                <div class="features__box-text u-margin-bottom-sm">Book a trip</div>
                <div class="plane-container">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="1131.53px" height="379.304px" viewBox="0 0 1131.53 379.304" enable-background="new 0 0 1131.53 379.304"
                    xml:space="preserve" class="svg-plane plane">
                        <polygon fill="#D8D8D8" points="72.008,0 274.113,140.173 274.113,301.804 390.796,221.102 601.682,367.302 1131.53,0.223  "/>
                        <polygon fill="#C4C4C3" points="1131.53,0.223 274.113,140.173 274.113,301.804 390.796,221.102   "/>
                    </svg>
                </div>
                <a class="features__button" href="#">
                    <img src="<?php echo get_theme_file_uri('css/svg/chevron-right.svg'); ?>"></img>
                </a>
            </div>
            <div class="features__box">
                <div class="features__box-text u-margin-bottom-sm">Purchase a mountain</div>
                <div class='coin'>
                    <div class='front jump'>
                        <span class='currency'>$</span>
                    </div>
                    <div class='shadow'></div>
                </div>
                <a class="features__button" href="#">
                    <img src="<?php echo get_theme_file_uri('css/svg/chevron-right.svg'); ?>"></img>
                </a>         
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
    <div class="cookie-tray" role="dialog" aria-live="polite" aria-label="cookieconsent" aria-describedby="cookieconsent:desc"><!--googleoff: all-->
        <div class="cookie-tray__container">
            <div class="cookie-tray__text">This website uses cookies to ensure you get the best experience on our website. &nbsp;<a class="cookie-tray__link" href="#">Learn more</a></div>
            <div class="cookie-tray__button-box"><button class="cookie-tray__button">Got It!</button></div>
        </div>
    <!--googleon: all--></div>
	

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
    
</body>

</html>