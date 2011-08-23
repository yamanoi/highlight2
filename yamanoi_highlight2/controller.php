<?php
	class YamanoiHighlight2Package extends Package {
	protected $pkgHandle = 'yamanoi_highlight2';
	protected $appVersionRequired = '5.3.3';
	protected $pkgVersion = '1.2';
	
	public function getPackageDescription() {
		return "A Highlight block for software developers.";
	}
	
	public function getPackageName() {
		return "Syntax Highlighter 2";
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('yamanoi_highlight2', $pkg);		
	}

}
