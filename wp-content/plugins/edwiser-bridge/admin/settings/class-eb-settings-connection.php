<?php
/**
 * EDW Connection Settings
 *
 * @link       https://edwiser.org
 * @since      1.0.0
 *
 * @package    Edwiser Bridge
 * @subpackage Edwiser Bridge/admin
 */

namespace app\wisdmlabs\edwiserBridge;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( 'Eb_Settings_Connection' ) ) :

	/**
	 * Eb_Settings_Connection.
	 */
	class Eb_Settings_Connection extends EBSettingsPage {
		/**
		 * Constructor.
		 */
		public function __construct() {
			$this->_id   = 'connection';
			$this->label = __( 'Connection', 'eb-textdomain' );

			add_filter( 'eb_settings_tabs_array', array( $this, 'add_settings_page' ), 20 );
			add_action( 'eb_settings_' . $this->_id, array( $this, 'output' ) );
			add_action( 'eb_settings_save_' . $this->_id, array( $this, 'save' ) );
		}

		/**
		 * Output the settings.
		 *
		 * @since  1.0.0
		 */
		public function output() {
			global $current_section;

			$settings = $this->get_settings( $current_section );

			EbAdminSettings::output_fields( $settings );
		}

		/**
		 * Save settings.
		 *
		 * @since  1.0.0
		 */
		public function save() {
			global $current_section;

			$settings = $this->get_settings( $current_section );
			EbAdminSettings::save_fields( $settings );
		}

		/**
		 * Get settings array.
		 *
		 * @since  1.0.0
		 *
		 * @param text $current_section name of the section.
		 * @return array
		 */
		public function get_settings( $current_section = '' ) {
			$settings = apply_filters(
				'eb_connection_settings',
				array(
					array(
						'title' => __( 'Connection Settings', 'eb-textdomain' ),
						'type'  => 'title',
						'id'    => 'connection_options',
					),

					array(
						'title'             => __( 'Moodle URL', 'eb-textdomain' ),
						'desc'              => __(
							'Moodle URL ( Like: http://example.com or http://example.com/moodle etc.)',
							'eb-textdomain'
						),
						'id'                => 'eb_url',
						'css'               => 'min-width:350px;',
						'default'           => '',
						'type'              => 'url',
						'desc_tip'          => true,
						'custom_attributes' => array( 'required' => 'required' ),
					),

					array(
						'title'             => __( 'Moodle Access Token', 'eb-textdomain' ),
						'desc'              => __( 'Moodle access token.', 'eb-textdomain' ),
						'id'                => 'eb_access_token',
						'css'               => 'min-width:350px;',
						'default'           => '',
						'type'              => 'text',
						'desc_tip'          => true,
						'custom_attributes' => array( 'required' => 'required' ),
					),

					array(
						'title'    => '',
						'desc'     => '',
						'id'       => 'eb_test_connection_button',
						'default'  => __( 'Test Connection', 'eb-textdomain' ),
						'type'     => 'button',
						'desc_tip' => false,
						'class'    => 'button secondary',
					),

					array(
						'type' => 'sectionend',
						'id'   => 'connection_options',
					),
				)
			);

			return apply_filters( 'eb_get_settings_' . $this->_id, $settings, $current_section );
		}
	}

endif;

return new Eb_Settings_Connection();
