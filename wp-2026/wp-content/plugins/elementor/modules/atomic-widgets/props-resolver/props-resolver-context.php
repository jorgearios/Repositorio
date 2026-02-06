<?php

namespace Elementor\Modules\AtomicWidgets\PropsResolver;

use Elementor\Modules\AtomicWidgets\PropTypes\Contracts\Transformable_Prop_Type;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Props_Resolver_Context {
	private ?string $key = null;

	private ?Transformable_Prop_Type $prop_type;

	private bool $disabled = false;

<<<<<<< HEAD
=======
	private ?Transformers_Registry $transformers_registry = null;

>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	public static function make(): self {
		return new static();
	}

	public function set_key( ?string $key ): self {
		$this->key = $key;

		return $this;
	}

	public function set_disabled( bool $disabled ): self {
		$this->disabled = $disabled;

		return $this;
	}

	public function set_prop_type( Transformable_Prop_Type $prop_type ): self {
		$this->prop_type = $prop_type;

		return $this;
	}

	public function get_key(): ?string {
		return $this->key;
	}

	public function is_disabled(): bool {
		return $this->disabled;
	}

	public function get_prop_type(): ?Transformable_Prop_Type {
		return $this->prop_type;
	}
<<<<<<< HEAD
=======

	public function set_transformers_registry( Transformers_Registry $transformers_registry ): self {
		$this->transformers_registry = $transformers_registry;

		return $this;
	}

	public function get_transformer( string $prop_type_key ): ?Transformer_Base {
		if ( ! isset( $this->transformers_registry ) ) {
			return null;
		}

		return $this->transformers_registry->get( $prop_type_key );
	}
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
}
