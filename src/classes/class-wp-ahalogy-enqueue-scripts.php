<?php

class WP_Ahalogy_Enqueue_Scripts {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Ahalogy_Enqueue_Scripts
     */
    protected static $instance = null;

    /* Constructor
    ---------------------------------------------------------------------------------- */

    /**
     * Initialize class.
     */
    public function __construct() {

        add_action( 'wp_enqueue_scripts', array( $this, '__enqueue_scripts' ) );

    }

    /* Public
    ---------------------------------------------------------------------------------- */

    /**
     * Gets instance of class.
     *
     * @return WP_Ahalogy_Enqueue_Scripts Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /* Private
    ---------------------------------------------------------------------------------- */

    /**
     * Enqueues scripts.
     */
    public function __enqueue_scripts() {

        $wp_ahalogy = WP_Ahalogy::get_instance();

        $handle = $wp_ahalogy->get_slug() . '-script';
        $relative_path = __DIR__ . '/../site/js/';
        $filename = 'bundle.min.js';
        $filename_debug = 'bundle.concat.js';
        $dependencies = array();

        $clientId = '';

        if ( defined( 'WP_AHALOGY_CLIENT_ID' ) ) {

            $clientId = WP_AHALOGY_CLIENT_ID;

        }

        if ( empty( $clientId ) ) {

            return;

        }

        $data = array(
            'options' => array(
                'clientId' => $clientId
            )
        );

        $options = new WP_Enqueue_Options(
            $handle,
            $relative_path,
            $filename,
            $filename_debug,
            $dependencies,
            $wp_ahalogy->get_version()
        );

        $options->set_localization( $wp_ahalogy->get_localization_handle(),  $data );

        WP_Enqueue_Util::get_instance()->enqueue_script( $options );

    }

}