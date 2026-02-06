<?php

namespace Elementor\Modules\AtomicWidgets\PropTypes;

<<<<<<< HEAD
=======
use Elementor\Modules\AtomicWidgets\PropTypes\Contracts\Migratable_Prop_Type;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
use Elementor\Modules\AtomicWidgets\PropTypes\Primitives\String_Prop_Type;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

<<<<<<< HEAD
class Html_Prop_Type extends String_Prop_Type {
=======
class Html_Prop_Type extends String_Prop_Type implements Migratable_Prop_Type {
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	public static function get_key(): string {
		return 'html';
	}

	protected function validate_value( $value ): bool {
		return is_string( $value );
	}

	protected function sanitize_value( $value ) {
		return preg_replace_callback( '/^(\s*)(.*?)(\s*)$/', function ( $matches ) {
			[, $leading, $value, $trailing ] = $matches;

			$allowed_tags = [
<<<<<<< HEAD
				'b'          => [],
				'i'          => [],
				'em'         => [],
				'u'          => [],
				'ul'         => [],
				'ol'         => [],
				'li'         => [],
				'blockquote' => [],
				'a'          => [
					'href'   => true,
					'target' => true,
				],
				'del'        => [],
				'span'       => [],
				'br'         => [],
				'strong'     => [],
				'sup'        => [],
				'sub'        => [],
				's'          => [],
=======
				'b'           => [],
				'i'           => [],
				'em'          => [],
				'u'           => [],
				'ul'          => [],
				'ol'          => [],
				'li'          => [],
				'blockquote'  => [],
				'a'           => [ 'href' => true ],
				'del'         => [],
				'span'        => [],
				'br'          => [],
				'strong'      => [],
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
			];

			$sanitized = wp_kses( $value, $allowed_tags );

			return $leading . $sanitized . $trailing;
		}, $value );
	}
<<<<<<< HEAD
=======

	public function get_compatible_type_keys(): array {
		return [ String_Prop_Type::get_key() ];
	}
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
}
