<?php

namespace Elementor\Modules\Components\PropTypes;

<<<<<<< HEAD
use Elementor\Modules\AtomicWidgets\PropTypes\Base\Object_Prop_Type;
use Elementor\Modules\AtomicWidgets\PropTypes\Primitives\Number_Prop_Type;

=======
use Elementor\Modules\AtomicWidgets\PropTypes\Base\Plain_Prop_Type;
use Elementor\Plugin;
use Elementor\Modules\Components\Documents\Component;
use Elementor\Modules\Components\Documents\Component_Overridable_Props;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

<<<<<<< HEAD
class Component_Instance_Prop_Type extends Object_Prop_Type {
=======
class Component_Instance_Prop_Type extends Plain_Prop_Type {
	private $component_overridable_props = null;

>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	public static function get_key(): string {
		return 'component-instance';
	}

<<<<<<< HEAD
	protected function define_shape(): array {
		return [
			'component_id' => Number_Prop_Type::make()->required(),
			'overrides' => Overrides_Prop_Type::make()->optional(),
		];
	}

	public function validate_value( $value ): bool {
		if ( ! parent::validate_value( $value ) ) {
			return false;
		}

		$sanitized = parent::sanitize_value( $value );

		$overrides = $sanitized['overrides']['value'] ?? [];

		foreach ( $overrides as $item ) {
			$component_id = null;

			switch ( $item['$$type'] ) {
				case Override_Prop_Type::get_key():
					$component_id = $item['value']['schema_source']['id'];
					break;
				case Overridable_Prop_Type::get_key():
					$override = $item['value']['origin_value'];
					$component_id = $override['value']['schema_source']['id'];
					break;
			}

			if ( $component_id !== $sanitized['component_id']['value'] ) {
=======
	protected function validate_value( $value ): bool {
		if ( ! is_array( $value ) ) {
			return false;
		}

		$is_valid_structure = (
			isset( $value['component_id'] ) &&
			is_numeric( $value['component_id'] ) &&
			( isset( $value['overrides'] ) ? is_array( $value['overrides'] ) : true )
		);

		if ( ! $is_valid_structure ) {
			return false;
		}

		if ( ! isset( $value['overrides'] ) ) {
			return true;
		}

		$component_overridable_props = $this->get_component_overridable_props( $value['component_id'] );

		return $this->validate_component_overrides( $value['overrides'], $component_overridable_props );
	}

	private function validate_component_overrides( array $overrides, Component_Overridable_Props $component_overridable_props ): bool {
		$component_override_utils = new Component_Override_Utils( $component_overridable_props );

		foreach ( $overrides as $override ) {
			if ( ! $component_override_utils->validate( $override ) ) {
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
				return false;
			}
		}

		return true;
	}
<<<<<<< HEAD
=======

	public function sanitize_value( $value ): array {
		$sanitized_component_id = (int) $value['component_id'];

		$sanitized = [
			'component_id' => $sanitized_component_id,
		];

		if ( ! isset( $value['overrides'] ) ) {
			return $sanitized;
		}

		$component_overridable_props = $this->get_component_overridable_props( $sanitized_component_id );

		$sanitized_overrides = $this->sanitize_component_overrides( $value['overrides'], $component_overridable_props );

		if ( count( $sanitized_overrides ) > 0 ) {
			$sanitized['overrides'] = $sanitized_overrides;
		}

		return $sanitized;
	}

	private function sanitize_component_overrides( array $overrides, ?Component_Overridable_Props $component_overridable_props ): array {
		$component_override_utils = new Component_Override_Utils( $component_overridable_props );

		$sanitized = [];

		foreach ( $overrides as $override ) {
			$sanitized_override = $component_override_utils->sanitize( $override );

			if ( null !== $sanitized_override ) {
				$sanitized[] = $sanitized_override;
			}
		}

		return $sanitized;
	}

	private function get_component_overridable_props( int $component_id ) {
		if ( $this->component_overridable_props ) {
			return $this->component_overridable_props;
		}

		$component = Plugin::$instance->documents->get( $component_id );

		/** @var Component $component */
		if ( ! $component || $component->get_type() !== Component::TYPE ) {
			return null;
		}

		$this->component_overridable_props = $component->get_overridable_props();

		return $this->component_overridable_props;
	}
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
}
