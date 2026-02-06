<?php

namespace Elementor\Modules\AtomicWidgets\Controls\Types;

<<<<<<< HEAD
use Elementor\Modules\AtomicWidgets\Controls\Base\Atomic_Control_Base;
=======
use Elementor\Modules\AtomicWidgets\Base\Atomic_Control_Base;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
use Elementor\Modules\AtomicWidgets\Query\Query_Builder_Factory as Query_Builder;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Query_Control extends Atomic_Control_Base {
	private bool $allow_custom_values = true;
	private int $minimum_input_length = 2;
	private ?array $query_config = null;
	private ?string $placeholder = null;

	public function get_type(): string {
		return 'query';
	}

	public function set_placeholder( string $placeholder ): self {
		$this->placeholder = $placeholder;

		return $this;
	}

	public function set_allow_custom_values( bool $allow_custom_values ): self {
		$this->allow_custom_values = $allow_custom_values;

		return $this;
	}

	public function set_query_config( $config ): self {
		$this->query_config = $config;

		return $this;
	}

	public function get_props(): array {
		return [
			'allowCustomValues' => $this->allow_custom_values,
			'placeholder' => $this->placeholder,
			'queryOptions' => Query_Builder::create( $this->query_config )->build(),
			'minInputLength' => $this->minimum_input_length,
		];
	}
}
