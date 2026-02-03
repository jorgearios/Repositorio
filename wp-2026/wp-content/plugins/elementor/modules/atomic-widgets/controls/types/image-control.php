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

class Image_Control extends Atomic_Control_Base {
<<<<<<< HEAD
=======
	private string $show_mode = 'all';

	public function set_show_mode( string $show_mode ): self {
		$this->show_mode = $show_mode;

		return $this;
	}

>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	public function get_type(): string {
		return 'image';
	}

	public function get_props(): array {
		return [
			'sizes' => Image_Sizes::get_all(),
<<<<<<< HEAD
=======
			'showMode' => $this->show_mode,
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
		];
	}
}
