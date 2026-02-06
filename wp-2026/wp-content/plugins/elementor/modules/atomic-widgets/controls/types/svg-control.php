<?php

namespace Elementor\Modules\AtomicWidgets\Controls\Types;

<<<<<<< HEAD
use Elementor\Modules\AtomicWidgets\Controls\Base\Atomic_Control_Base;
=======
use Elementor\Modules\AtomicWidgets\Base\Atomic_Control_Base;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
use Elementor\Modules\AtomicWidgets\Utils\Image\Image_Sizes;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Svg_Control extends Atomic_Control_Base {
	public function get_type(): string {
		return 'svg-media';
	}

	public function get_props(): array {
		return [
			'type' => $this->get_type(),
		];
	}
}
