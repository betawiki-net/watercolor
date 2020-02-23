<?php

class SkinWatercolor extends SkinVector {
	var $skinname = 'watercolor';
	var $stylename = 'Watercolor';
	var $template = 'WatercolorTemplate';

	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( 'skins.watercolor' );
	}
}
