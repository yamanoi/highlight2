<?php
	class YamanoiHighlight2Package extends Package {
	protected $pkgHandle = 'yamanoi_highlight2';
	protected $appVersionRequired = '5.4.1.1';
	protected $pkgVersion = '2.0';
	
	public function getPackageDescription() {
		return t("A Highlight block for software developers.");
	}
	
	public function getPackageName() {
		return t("Syntax Highlighter2");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('yamanoi_highlight2', $pkg);		
	}

}
