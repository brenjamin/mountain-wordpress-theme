<?php 
    /**
     * _s functions and definitions
     *
     * @link https://developer.wordpress.org/themes/basics/theme-functions/
     *
     * @package _s
     */

    if ( ! function_exists( '_s_setup' ) ) :
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which
         * runs before the init hook. The init hook is too late for some features, such
         * as indicating support for post thumbnails.
         */
        function _s_setup() {
            /*
            * Make theme available for translation.
            * Translations can be filed in the /languages/ directory.
            * If you're building a theme based on _s, use a find and replace
            * to change '_s' to the name of your theme in all the template files.
            */
            load_theme_textdomain( '_s', get_template_directory() . '/languages' );

            // Add default posts and comments RSS feed links to head.
            add_theme_support( 'automatic-feed-links' );

            /*
            * Let WordPress manage the document title.
            * By adding theme support, we declare that this theme does not use a
            * hard-coded <title> tag in the document head, and expect WordPress to
            * provide it for us.
            */
            add_theme_support( 'title-tag' );

            /*
            * Enable support for Post Thumbnails on posts and pages.
            *
            * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
            */
            add_theme_support( 'post-thumbnails' );

            /*
            * Switch default core markup for search form, comment form, and comments
            * to output valid HTML5.
            */
            add_theme_support( 'html5', array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ) );

            // Add theme support for selective refresh for widgets.
            add_theme_support( 'customize-selective-refresh-widgets' );

            /**
             * Add support for core custom logo.
             *
             * @link https://codex.wordpress.org/Theme_Logo
             */

        }
    endif;
    add_action( 'after_setup_theme', '_s_setup' );

    // Remove unwanted blocks
    add_filter( 'allowed_block_types', 'allowed_block_types' );
    
    function allowed_block_types( $allowed_blocks ) {
    
        return array(
            'core/paragraph',
            'core/image',
            'core/heading',
            'core/list',
            'core/html',
            'core/spacer'
        );

    }


    /**
     * Set the content width in pixels, based on the theme's design and stylesheet.
     *
     * Priority 0 to make it available to lower priority callbacks.
     *
     * @global int $content_width
     */
    function _s_content_width() {
        // This variable is intended to be overruled from themes.
        // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
        // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
        $GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
    }
    add_action( 'after_setup_theme', '_s_content_width', 0 );

    function mountain_files() {
        wp_enqueue_script('main-mountain-javascript', get_theme_file_uri('/js/main.min.js'), NULL, microtime(), true);
        wp_enqueue_style('mountain_main_styles', get_template_directory_uri() . '/css/main.css', NULL, microtime());

        if (is_page_template('page-form.php')) {
            wp_enqueue_script('form-javascript', get_theme_file_uri('/js/form.min.js'), NULL, microtime(), true);
            wp_enqueue_style('form_styles', get_template_directory_uri() . '/css/form.css', NULL, microtime());
        }

        if (is_page_template('page-tabs.php')) {
            wp_enqueue_script('tabs-javascript', get_theme_file_uri('/js/tabs.min.js'), NULL, microtime(), true);
            wp_enqueue_style('form_styles', get_template_directory_uri() . '/css/tabs.css', NULL, microtime());
        }
    }

    add_action('wp_enqueue_scripts', 'mountain_files');

    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );

?>