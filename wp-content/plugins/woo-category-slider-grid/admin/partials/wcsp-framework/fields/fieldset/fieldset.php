<?php
/**
 * Framework fieldset field file.
 *
 * @link       https://shapedplugin.com/
 * @since      1.4.20
 *
 * @package    Woo_Category_Slider
 * @subpackage Woo_Category_Slider/admin/partials/section/settings
 * @author     ShapedPlugin <support@shapedplugin.com>
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access directly.

if ( ! class_exists( 'SP_WCS_Field_fieldset' ) ) {
	/**
	 *
	 * Field: fieldset
	 *
	 * @since 1.4.20
	 * @version 1.4.20
	 */
	class SP_WCS_Field_fieldset extends SP_WCS_Fields {
		/**
		 * The class constructor.
		 *
		 * @param array  $field The field type.
		 * @param string $value The values of the field.
		 * @param string $unique The unique ID for the field.
		 * @param string $where To where show the output CSS.
		 * @param string $parent The parent args.
		 */
		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}

		/**
		 * The render method.
		 *
		 * @return void
		 */
		public function render() {
			echo wp_kses_post( $this->field_before() );
			echo '<div class="spf-fieldset-content">';
			foreach ( $this->field['fields'] as $field ) {
				$field_id      = ( isset( $field['id'] ) ) ? $field['id'] : '';
				$field_default = ( isset( $field['default'] ) ) ? $field['default'] : '';
				$field_value   = ( isset( $this->value[ $field_id ] ) ) ? $this->value[ $field_id ] : $field_default;
				$unique_id     = ( ! empty( $this->unique ) ) ? $this->unique . '[' . $this->field['id'] . ']' : $this->field['id'];

				SP_WCS::field( $field, $field_value, $unique_id, 'field/fieldset' );
			}
			echo '</div>';
			echo wp_kses_post( $this->field_after() );
		}
	}
}
