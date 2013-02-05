<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeJmpressPackage extends Package {

	protected $pkgHandle = 'theme_jmpress';
	protected $appVersionRequired = '5.6';
	protected $pkgVersion = '0.1';
	
	public function getPackageDescription() {
		return t("build a website on the infinite canvas.");
	}
	
	public function getPackageName() {
		return t("Jmpress Theme");
	}
	
	public function install() {
		$pkg = parent::install();
		
		BlockType::installBlockTypeFromPackage('jmpress_step', $pkg); 
		PageTheme::add('jmpress', $pkg);
	}
	
}