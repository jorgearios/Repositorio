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

class Size_Control extends Atomic_Control_Base {
	private ?string $placeholder = null;
	private ?string $variant = 'length';
	private ?array $units = null;
	private ?string $default_unit = null;
	private ?bool $disable_custom = false;

	public function get_type(): string {
		return 'size';
	}

	public function set_placeholder( string $placeholder ): self {
		$this->placeholder = $placeholder;

		return $this;
	}

	public function set_variant( string $variant ): self {
		$this->variant = $variant;

		return $this;
	}

	public function set_units( array $units ): self {
		$this->units = $units;

		return $this;
	}

	public function set_default_unit( string $default_unit ): self {
		$this->default_unit = $default_unit;

		return $this;
	}

	public function set_disable_custom( bool $disable_custom ): self {
		$this->disable_custom = $disable_custom;

		return $this;
	}

	public function get_props(): array {
		return [
			'placeholder' => $this->placeholder,
			'variant' => $this->variant,
			'units' => $this->units,
			'defaultUnit' => $this->default_unit,
			'disableCustom' => $this->disable_custom,
		];
	}
}
