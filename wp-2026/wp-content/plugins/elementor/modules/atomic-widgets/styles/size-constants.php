<?php

namespace Elementor\Modules\AtomicWidgets\Styles;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Size_Constants {
	const UNIT_PX = 'px';
	const UNIT_PERCENT = '%';
	const UNIT_EM = 'em';
	const UNIT_REM = 'rem';
	const UNIT_VW = 'vw';
	const UNIT_VH = 'vh';
<<<<<<< HEAD
	const UNIT_CH = 'ch';
=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	const UNIT_AUTO = 'auto';
	const UNIT_CUSTOM = 'custom';
	const UNIT_SECOND = 's';
	const UNIT_MILLI_SECOND = 'ms';
	const UNIT_ANGLE_DEG = 'deg';

<<<<<<< HEAD
	const DEFAULT_UNIT = self::UNIT_PX;

=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	const LENGTH_UNITS = [
		self::UNIT_PX,
		self::UNIT_EM,
		self::UNIT_REM,
		self::UNIT_VW,
		self::UNIT_VH,
<<<<<<< HEAD
		self::UNIT_CH,
=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	];

	const TIME_UNITS = [ self::UNIT_SECOND, self::UNIT_MILLI_SECOND ];
	const EXTENDED_UNITS = [ self::UNIT_AUTO, self::UNIT_CUSTOM ];
	const VIEWPORT_MIN_MAX_UNITS = [ 'vmin', 'vmax' ];
	const ANGLE_UNITS = [ self::UNIT_ANGLE_DEG, 'rad', 'grad', 'turn' ];

	public static function all_supported_units(): array {
		return array_merge(
			self::all(),
			self::ANGLE_UNITS,
			self::TIME_UNITS,
			self::EXTENDED_UNITS,
			self::VIEWPORT_MIN_MAX_UNITS,
		);
	}

	public static function all(): array {
		return [
			...self::LENGTH_UNITS,
			self::UNIT_PERCENT,
			self::UNIT_AUTO,
<<<<<<< HEAD
			self::UNIT_CUSTOM,
=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
		];
	}

	private static function units_without_auto(): array {
<<<<<<< HEAD
		return [ ...self::LENGTH_UNITS, self::UNIT_PERCENT, self::UNIT_CUSTOM ];
=======
		return [ ...self::LENGTH_UNITS, self::UNIT_PERCENT ];
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	}

	public static function layout(): array {
		return self::units_without_auto();
	}

	public static function spacing_margin() {
		return self::all();
	}

	public static function spacing(): array {
		return self::units_without_auto();
	}

	public static function position(): array {
		return self::units_without_auto();
	}

	public static function anchor_offset(): array {
<<<<<<< HEAD
		return [ ...self::LENGTH_UNITS, self::UNIT_CUSTOM ];
=======
		return self::LENGTH_UNITS;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	}

	public static function typography(): array {
		return self::units_without_auto();
	}

	public static function stroke_width(): array {
		return [
			self::UNIT_PX,
			self::UNIT_EM,
			self::UNIT_REM,
<<<<<<< HEAD
			self::UNIT_CUSTOM,
=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
		];
	}

	public static function transition(): array {
<<<<<<< HEAD
		return [ ...self::TIME_UNITS, self::UNIT_CUSTOM ];
=======
		return self::TIME_UNITS;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	}

	public static function border(): array {
		return self::units_without_auto();
	}


	public static function opacity(): array {
<<<<<<< HEAD
		return [ self::UNIT_PERCENT, self::UNIT_CUSTOM ];
=======
		return [ self::UNIT_PERCENT ];
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	}

	public static function box_shadow(): array {
		return self::units_without_auto();
	}

	public static function rotate(): array {
<<<<<<< HEAD
		return [ ...self::ANGLE_UNITS, self::UNIT_CUSTOM ];
=======
		return self::ANGLE_UNITS;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	}

	public static function transform(): array {
		return self::units_without_auto();
	}

	public static function drop_shadow(): array {
<<<<<<< HEAD
		return [ ...self::LENGTH_UNITS, self::UNIT_CUSTOM ];
	}

	public static function blur_filter(): array {
		return [ ...self::LENGTH_UNITS, self::UNIT_CUSTOM ];
	}

	public static function intensity_filter(): array {
		return [ self::UNIT_PERCENT, self::UNIT_CUSTOM ];
	}

	public static function color_tone_filter(): array {
		return [ self::UNIT_PERCENT, self::UNIT_CUSTOM ];
	}

	public static function hue_rotate_filter(): array {
		return [ ...self::ANGLE_UNITS, self::UNIT_CUSTOM ];
=======
		return self::LENGTH_UNITS;
	}

	public static function blur_filter(): array {
		return self::LENGTH_UNITS;
	}

	public static function intensity_filter(): array {
		return [ self::UNIT_PERCENT ];
	}

	public static function color_tone_filter(): array {
		return [ self::UNIT_PERCENT ];
	}

	public static function hue_rotate_filter(): array {
		return self::ANGLE_UNITS;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	}
}
