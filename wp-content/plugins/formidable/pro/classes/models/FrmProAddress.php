<?php

class FrmProAddress {

	public static function validate( $errors, $field, $values, $args ) {
		self::validate_required_fields( $errors, $field, $values );
		self::validate_zip( $errors, $field, $values );

		return $errors;
	}

	public static function validate_required_fields( &$errors, $field, $values ) {
		$skip_required = FrmProEntryMeta::skip_required_validation( $field );
		if ( $field->required && ! $skip_required ) {
			foreach ( $values as $key => $value ) {
				if ( empty( $value ) && $key != 'line2' ) {
					$errors[ 'field' . $field->temp_id . '-' . $key ] = '';
				}
			}
		}
	}

	public static function validate_zip( &$errors, $field, $values ) {
		if ( isset( $values['zip'] ) && ! empty( $values['zip'] ) ) {
			$address_type = FrmField::get_option( $field, 'address_type' );
			$format = '';
			if ( $address_type == 'us' ) {
				$format = '/^[0-9]{5}(?:-[0-9]{4})?$/';
			}
			$format = apply_filters( 'frm_zip_format', $format, compact( 'field' ) );
			if ( ! empty( $format ) && ! preg_match( $format, $values['zip'] ) ) {
				$errors[ 'field' . $field->temp_id . '-zip' ] = __( 'This value is invalid', 'formidable' );
			}
		}
	}
}
