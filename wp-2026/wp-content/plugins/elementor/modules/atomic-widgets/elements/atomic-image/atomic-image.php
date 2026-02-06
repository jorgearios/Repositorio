<?php
namespace Elementor\Modules\AtomicWidgets\Elements\Atomic_Image;

use Elementor\Modules\AtomicWidgets\Controls\Types\Link_Control;
<<<<<<< HEAD
use Elementor\Modules\AtomicWidgets\Elements\Base\Has_Template;
=======
use Elementor\Modules\AtomicWidgets\Elements\Has_Template;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
use Elementor\Modules\AtomicWidgets\PropTypes\Classes_Prop_Type;
use Elementor\Modules\AtomicWidgets\PropTypes\Image_Prop_Type;
use Elementor\Modules\AtomicWidgets\PropTypes\Link_Prop_Type;
use Elementor\Modules\AtomicWidgets\Controls\Section;
<<<<<<< HEAD
use Elementor\Modules\AtomicWidgets\Elements\Base\Atomic_Widget_Base;
=======
use Elementor\Modules\AtomicWidgets\Elements\Atomic_Widget_Base;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
use Elementor\Modules\AtomicWidgets\PropTypes\Attributes_Prop_Type;
use Elementor\Modules\AtomicWidgets\Controls\Types\Image_Control;
use Elementor\Modules\AtomicWidgets\Utils\Image\Placeholder_Image;
use Elementor\Modules\AtomicWidgets\Styles\Style_Definition;
use Elementor\Modules\AtomicWidgets\Styles\Style_Variant;
use Elementor\Modules\AtomicWidgets\Controls\Types\Text_Control;
<<<<<<< HEAD
use Elementor\Modules\Components\PropTypes\Overridable_Prop_Type;
=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Atomic_Image extends Atomic_Widget_Base {
	use Has_Template;

<<<<<<< HEAD
	public static $widget_description = 'Display an image with customizable styles and link options.';

=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	const LINK_BASE_STYLE_KEY = 'link-base';
	const BASE_STYLE_KEY = 'base';

	public static function get_element_type(): string {
		return 'e-image';
	}

	public function get_title() {
		return esc_html__( 'Image', 'elementor' );
	}

	public function get_keywords() {
		return [ 'ato', 'atom', 'atoms', 'atomic' ];
	}

	public function get_icon() {
		return 'eicon-e-image';
	}

	protected static function define_props_schema(): array {
		$props = [
			'classes' => Classes_Prop_Type::make()
				->default( [] ),

			'image' => Image_Prop_Type::make()
				->default_url( Placeholder_Image::get_placeholder_image() )
				->default_size( 'full' ),

			'link' => Link_Prop_Type::make(),

<<<<<<< HEAD
			'attributes' => Attributes_Prop_Type::make()->meta( Overridable_Prop_Type::ignore() ),
=======
			'attributes' => Attributes_Prop_Type::make(),
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
		];

		return $props;
	}

	protected function define_atomic_controls(): array {
		return [
			Section::make()
				->set_label( esc_html__( 'Content', 'elementor' ) )
				->set_items( [
					Image_Control::bind_to( 'image' )
<<<<<<< HEAD
=======
						->set_show_mode( 'media' )
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
						->set_label( __( 'Image', 'elementor' ) ),
				] ),
			Section::make()
				->set_label( __( 'Settings', 'elementor' ) )
				->set_id( 'settings' )
				->set_items( $this->get_settings_controls() ),
		];
	}

	protected function get_settings_controls(): array {
		return [
<<<<<<< HEAD
			Link_Control::bind_to( 'link' )
				->set_placeholder( __( 'Type or paste your URL', 'elementor' ) )
				->set_label( __( 'Link', 'elementor' ) ),
=======
			Image_Control::bind_to( 'image' )
				->set_show_mode( 'sizes' )
				->set_label( __( 'Image resolution', 'elementor' ) )
				->set_meta( [ 'layout' => 'two-columns' ] ),
			Link_Control::bind_to( 'link' )
				->set_placeholder( __( 'Type or paste your URL', 'elementor' ) )
				->set_label( __( 'Link', 'elementor' ) )
				->set_meta( [
					'topDivider' => true,
				] ),
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
			Text_Control::bind_to( '_cssid' )
				->set_label( __( 'ID', 'elementor' ) )
				->set_meta( $this->get_css_id_control_meta() ),
		];
	}

	protected function define_base_styles(): array {
		return [
			self::LINK_BASE_STYLE_KEY => Style_Definition::make()
				->add_variant(
					Style_Variant::make()
						->add_prop( 'display', 'inherit' )
						->add_prop( 'width', 'fit-content' )
				),
			self::BASE_STYLE_KEY => Style_Definition::make()
				->add_variant(
					Style_Variant::make()
						->add_prop( 'display', 'block' )
				),
		];
	}

	protected function get_templates(): array {
		return [
			'elementor/elements/atomic-image' => __DIR__ . '/atomic-image.html.twig',
		];
	}
}
