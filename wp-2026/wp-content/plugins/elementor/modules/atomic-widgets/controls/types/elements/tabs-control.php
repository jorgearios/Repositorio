<?php
namespace Elementor\Modules\AtomicWidgets\Controls\Types\Elements;

<<<<<<< HEAD
use Elementor\Modules\AtomicWidgets\Controls\Base\Element_Control_Base;
=======
use Elementor\Modules\AtomicWidgets\Base\Element_Control_Base;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Tabs_Control extends Element_Control_Base {
	public function get_type(): string {
		return 'tabs';
	}

	public function get_props(): array {
		return [];
	}
}
