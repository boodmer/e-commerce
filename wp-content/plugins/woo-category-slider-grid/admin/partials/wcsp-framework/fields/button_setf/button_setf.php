<?php

/**
 * Framework button setf field file.
 *
 * @link       https://shapedplugin.com/
 * @since      1.0.0
 *
 * @package    Woo_Category_Slider
 * @subpackage Woo_Category_Slider/admin/partials/section/settings
 * @author     ShapedPlugin <support@shapedplugin.com>
 */

if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

if ( ! class_exists( 'SP_WCS_Field_button_setf' ) ) {
	/**
	 *
	 * Field: button_setf
	 *
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	class SP_WCS_Field_button_setf extends SP_WCS_Fields {
		/**
		 * Field constructor.
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
		 * Render
		 *
		 * @return void
		 */
		public function render() {

			$args = wp_parse_args(
				$this->field,
				array(
					'multiple' => false,
					'options'  => array(),
				)
			);

			$value = ( is_array( $this->value ) ) ? $this->value : array_filter( (array) $this->value );

			echo wp_kses_post( $this->field_before() );

			if ( ! empty( $args['options'] ) ) {

				echo '<div class="spf-siblings spf--button-group" data-multiple="' . esc_attr( $args['multiple'] ) . '">';

				foreach ( $args['options'] as $key => $option ) {
					$pro_only = $option['pro_only'] ? 'disabled' : '';

					$type    = ( $args['multiple'] ) ? 'checkbox' : 'radio';
					$extra   = ( $args['multiple'] ) ? '[]' : '';
					$active  = ( in_array( $key, $value, true ) ) ? ' spf--active' : '';
					$checked = ( in_array( $key, $value, true ) ) ? ' checked' : '';

					echo '<div class="spf--sibling spf--button' . esc_attr( $active ) . ' wcs-' . esc_attr( $pro_only ) . '">';
					echo '<input ' . esc_attr( $pro_only ) . ' type="' . esc_attr( $type ) . '" name="' . esc_attr( $this->field_name( $extra ) ) . '" value="' . esc_attr( $key ) . '"' . wp_kses_post( $this->field_attributes() . $checked ) . '/>';
					echo wp_kses_post( $option['text'] );
					echo '</div>';

				}

				echo '</div>';

			}

			echo '<div class="clear"></div>';

			echo wp_kses_post( $this->field_after() );
		}
	}
}
