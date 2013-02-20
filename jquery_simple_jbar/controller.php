<?php   

defined('C5_EXECUTE') or die(_("Access Denied."));

class jquerysimplejbarPackage extends Package {

	protected $pkgHandle = 'jquery_simple_jbar';
	protected $appVersionRequired = '5.3.3'; 
	protected $pkgVersion = '1.0.0';
	
	public function getPackageDescription() {
		return t("Lets you add a block where you can add a notification bar callable by javascript.");
	}
	
	public function getPackageName() {
		return t("Jquery-simple-jbar");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('jquerysimplejbar', $pkg);
		
	}

}