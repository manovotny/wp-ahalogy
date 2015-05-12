<?php

class WP_Ahalogy {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Ahalogy
     */
    protected static $instance = null;

    /**
     * Ahalogy analytics slug.
     *
     * @var string
     */
    protected $slug = 'wp-ahalogy';

    /**
     * Version, used for cache-busting of style and script file references.
     *
     * @var string
     */
    protected $version = '1.0.2';

    /* Public
    ---------------------------------------------------------------------------------- */

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

    /**
     * Gets localization handle.
     *
     * @return string Localization handle.
     */
    public function get_localization_handle() {

        return str_replace( '-', '_', $this->slug );

    }

    /**
     * Gets slug.
     *
     * @return string Slug.
     */
    public function get_slug() {

        return $this->slug;

    }

    /**
     * Gets version.
     *
     * @return string Version.
     */
    public function get_version() {

        return $this->version;

    }

}