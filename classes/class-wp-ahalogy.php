<?php
/**
 * @package WP_Ahalogy
 */

class WP_Ahalogy {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /* Instance
    ---------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Ahalogy
     */
    protected static $instance = null;

    /**
     * Get accessor method for instance property.
     *
     * @return WP_Ahalogy Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /* Localization Handle
    ---------------------------------------------- */

    /**
     * Getter method for localization handle.
     *
     * @return string Localization handle.
     */
    private function get_localization_handle() {

        return str_replace( '-', '_', $this->slug );

    }

    /* Slug
    ---------------------------------------------- */

    /**
     * Ahalogy analytics slug.
     *
     * @var string
     */
    protected $slug = 'wp-ahalogy';

    /* Version
    ---------------------------------------------- */

    /**
     * Version, used for cache-busting of style and script file references.
     *
     * @var string
     */
    protected $version = '1.0.0';

    /* Constructor
    ---------------------------------------------------------------------------------- */

    /**
     * Initialize class.
     */
    public function __construct() {

        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

    }

    /* Methods
    ---------------------------------------------------------------------------------- */

    /**
     * Enqueues scripts.
     */
    public function enqueue_scripts() {

        $wp_enqueue_util = WP_Enqueue_Util::get_instance();

        $handle = $this->slug . '-script';
        $relative_path = __DIR__ . '/../js/';
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
            $this->version
        );

        $options->set_localization( $this->get_localization_handle(),  $data );

        $wp_enqueue_util->enqueue_script( $options );

    }

}