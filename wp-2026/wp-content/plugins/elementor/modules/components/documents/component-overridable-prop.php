<?php
namespace Elementor\Modules\Components\Documents;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Component_Overridable_Prop {
	/** @var string */
	public $override_key;

	/** @var string */
	public $element_id;

	/** @var string */
	public $el_type;

	/** @var string */
	public $widget_type;

	/** @var string */
	public $prop_key;

	/** @var string */
	public $label;

	/** @var array{ $$type: string, value: mixed } */
<<<<<<< HEAD
	public $origin_value;
=======
	public $default_value;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275

	/** @var string */
	public $group_id;

<<<<<<< HEAD
	/** @var ?array{ $el_type: string, $widget_type: string, $prop_key: string } */
	public $origin_prop_fields = null;

=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	public function __construct( array $overridable_prop ) {
		$this->override_key = $overridable_prop['overrideKey'];
		$this->element_id = $overridable_prop['elementId'];
		$this->el_type = $overridable_prop['elType'];
		$this->widget_type = $overridable_prop['widgetType'];
		$this->prop_key = $overridable_prop['propKey'];
		$this->label = $overridable_prop['label'];
<<<<<<< HEAD
		$this->origin_value = $overridable_prop['originValue'];
		$this->group_id = $overridable_prop['groupId'] ?? null;

		if ( isset( $overridable_prop['originPropFields'] ) ) {
			$this->origin_prop_fields = [
				'el_type' => $overridable_prop['originPropFields']['elType'],
				'widget_type' => $overridable_prop['originPropFields']['widgetType'],
				'prop_key' => $overridable_prop['originPropFields']['propKey'],
				'element_id' => $overridable_prop['originPropFields']['elementId'],
			];
		}
=======
		$this->default_value = $overridable_prop['defaultValue'];
		$this->group_id = $overridable_prop['groupId'] ?? null;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	}

	public static function make( array $overridable_prop ): self {
		return new self( $overridable_prop );
	}
}
