<?php

namespace Elementor\Modules\AtomicWidgets\PropTypes;

use Elementor\Modules\AtomicWidgets\PropDependencies\Manager as Dependency_Manager;
use Elementor\Modules\AtomicWidgets\PropTypes\Base\Object_Prop_Type;
use Elementor\Modules\AtomicWidgets\PropTypes\Primitives\Boolean_Prop_Type;
<<<<<<< HEAD
use Elementor\Modules\AtomicWidgets\PropTypes\Primitives\String_Prop_Type;
=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Link_Prop_Type extends Object_Prop_Type {
<<<<<<< HEAD
	public const DEFAULT_TAG = 'a';

=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
	public static function get_key(): string {
		return 'link';
	}

	protected function define_shape(): array {
		$target_blank_dependencies = Dependency_Manager::make()
<<<<<<< HEAD
			->where( [
				'operator' => 'exists',
				'path' => [ 'link', 'destination' ],
			] )
			->get();

		$tag_dependencies = Dependency_Manager::make()
			->where( [
				'operator' => 'ne',
				'path' => [ 'link', 'destination' ],
				'nestedPath' => [ 'group' ],
				'value' => 'action',
				'newValue' => String_Prop_Type::generate( 'button' ),
			] )->get();
=======
		->where( [
			'operator' => 'exists',
			'path' => [ 'link', 'destination' ],
		] )
		->get();
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275

		return [
			'destination' => Union_Prop_Type::make()
				->add_prop_type( Url_Prop_Type::make()->skip_validation() )
				->add_prop_type( Query_Prop_Type::make() ),
			'isTargetBlank' => Boolean_Prop_Type::make()
				->set_dependencies( $target_blank_dependencies ),
<<<<<<< HEAD
			'tag' => String_Prop_Type::make()
				->enum( [ 'a', 'button' ] )
				->default( self::DEFAULT_TAG )
				->set_dependencies( $tag_dependencies ),
=======
>>>>>>> 925a27b3365a70f9d425839bd2b9f9ff46969275
		];
	}
}
