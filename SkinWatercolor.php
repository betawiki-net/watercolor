<?php

class SkinWatercolor extends MediaWiki\Skins\Vector\SkinVectorLegacy {
	var $skinname = 'watercolor';
	var $stylename = 'Watercolor';
	var $template = 'WatercolorTemplate';

	public function getDefaultModules() {
		$modules = parent::getDefaultModules();
		if ( !isset( $modules['styles']['skin'] ) ) {
			$modules['styles']['skin'] = [];
		}
		array_unshift( $modules['styles']['skin'], 'skins.watercolor' );
		return $modules;
	}
}
