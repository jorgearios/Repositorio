<?php

namespace Elementor\Modules\Components\Transformers;

use Elementor\Modules\AtomicWidgets\PropsResolver\Props_Resolver_Context;
use Elementor\Modules\AtomicWidgets\PropsResolver\Transformer_Base;
<<<<<<< HEAD
use Elementor\Plugin;
use Elementor\Core\Base\Document as Component_Document;
use Elementor\Modules\Components\Components_Repository;
=======
use Elementor\Modules\Components\Documents\Component;
use Elementor\Plugin;

>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Component_Instance_Transformer extends Transformer_Base {
<<<<<<< HEAD
	private static array $rendering_stack = [];
	private static $repository;

	public static function reset_rendering_stack(): void {
		self::$rendering_stack = [];
	}

	public function transform( $value, Props_Resolver_Context $context ) {
		$component_id = $value['component_id'];

		if ( $this->is_circular_reference( $component_id ) ) {
			return '';
		}

		self::$rendering_stack[] = $component_id;
		$content = $this->get_rendered_content( $component_id );
		array_pop( self::$rendering_stack );

		return $content;
	}

	private function is_circular_reference( int $component_id ): bool {
		return in_array( $component_id, self::$rendering_stack, true );
	}

	private function get_rendered_content( int $component_id ): string {
		$should_show_autosave = is_preview();
		$component = $this->get_repository()->get( $component_id, $should_show_autosave );

		if ( ! $component || ! $this->should_render_content( $component ) ) {
			return '';
		}

		Plugin::$instance->documents->switch_to_document( $component );

		$data = $component->get_elements_data();
=======
	public function transform( $value, Props_Resolver_Context $context ) {
		$component_id = $value['component_id'];

		$document = Plugin::$instance->documents->get_doc_for_frontend( $component_id );

		if (
			! $document ||
			$this->is_password_protected( $document ) ||
			! $this->is_component( $document ) ||
			! $document->is_built_with_elementor()
		) {
			return '';
		}

		Plugin::$instance->documents->switch_to_document( $document );

		$data = $document->get_elements_data();
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275

		$data = apply_filters( 'elementor/frontend/builder_content_data', $data, $component_id );

		$content = '';

		if ( ! empty( $data ) ) {
			ob_start();

<<<<<<< HEAD
			$component->print_elements( $data );
=======
			$document->print_elements( $data );
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275

			$content = ob_get_clean();

			$content = apply_filters( 'elementor/frontend/the_content', $content );
		}

		Plugin::$instance->documents->restore_document();

		return $content;
	}

<<<<<<< HEAD
	private function should_render_content( Component_Document $document ): bool {
		return ! $this->is_password_protected( $document ) &&
			$document->is_built_with_elementor();
=======
	private function is_component( $document ) {
		return $document instanceof Component;
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	}

	private function is_password_protected( $document ) {
		return post_password_required( $document->get_post()->ID );
	}
<<<<<<< HEAD

	private function get_repository(): Components_Repository {
		if ( ! self::$repository ) {
			self::$repository = new Components_Repository();
		}

		return self::$repository;
	}
=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
}
