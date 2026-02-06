<?php
namespace Elementor\Modules\AtomicWidgets\Controls\Types;

<<<<<<< HEAD
use Elementor\Modules\AtomicWidgets\Controls\Base\Atomic_Control_Base;
=======
use Elementor\Modules\AtomicWidgets\Base\Atomic_Control_Base;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Textarea_Control extends Atomic_Control_Base {
	private $placeholder = null;

	public function get_type(): string {
		return 'textarea';
	}

	public function set_placeholder( string $placeholder ): self {
		$this->placeholder = html_entity_decode( $placeholder );

		return $this;
	}

	public function get_props(): array {
		return [
			'placeholder' => $this->placeholder,
		];
	}
}
