<?php

namespace Elementor\Modules\GlobalClasses\Utils;

use Elementor\Core\Base\Document;
use Elementor\Core\Utils\Collection;
<<<<<<< HEAD
use Elementor\Modules\AtomicWidgets\Elements\Base\Atomic_Element_Base;
use Elementor\Modules\AtomicWidgets\Elements\Base\Atomic_Widget_Base;
=======
use Elementor\Modules\AtomicWidgets\Elements\Atomic_Element_Base;
use Elementor\Modules\AtomicWidgets\Elements\Atomic_Widget_Base;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
use Elementor\Plugin;

class Atomic_Elements_Utils {

	public static function is_classes_prop( $prop ) {
		// phpcs:ignore
		return 'plain' === $prop::$KIND && 'classes' === $prop->get_key();
	}

	public static function get_element_type( $element ) {
		return 'widget' === $element['elType'] ? $element['widgetType'] : $element['elType'];
	}

	public static function get_element_instance( $element_type ) {
		$widget = Plugin::$instance->widgets_manager->get_widget_types( $element_type );
		$element = Plugin::$instance->elements_manager->get_element_types( $element_type );

		return $widget ?? $element;
	}

	public static function is_atomic_element( $element_instance ) {
		if ( ! $element_instance ) {
			return false;
		}

		return (
			$element_instance instanceof Atomic_Element_Base ||
			$element_instance instanceof Atomic_Widget_Base
		);
	}
}
