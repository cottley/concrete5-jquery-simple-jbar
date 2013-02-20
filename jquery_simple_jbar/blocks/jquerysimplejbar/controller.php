<?php    
	defined('C5_EXECUTE') or die(_("Access Denied."));
	class JquerysimplejbarBlockController extends BlockController {
		
    /*
     * Javascript code from https://github.com/ryanohs/Blog
     */
    
		protected $btTable = 'btJquerysimplejbar';
		protected $btInterfaceWidth = "400";
		protected $btInterfaceHeight = "230";
		
		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Lets you add a block that will provide a callable javascript bar notification");
		}
		
		public function getBlockTypeName() {
			return t("jQuery Simple Bar");
		}
				
		function __construct($obj = null) {		
			parent::__construct($obj);	
		}
    
    public function on_page_view() {
      $bv = new BlockView();
      $bv->setBlockObject($this->getBlockObject());
      $blockURL = $bv->getBlockURL();
      $html = Loader::helper('html');
//      if (!$pg->isEditMode()) {
        $this->addHeaderItem($html->css("{$blockURL}/JBar/jbar.css"));
        $this->addHeaderItem($html->css("{$blockURL}/JBar/jbar.colors.css"));
        $this->addHeaderItem($html->javascript("{$blockURL}/JBar/jquery.bar.custom.js"));
        $this->addHeaderItem($html->javascript("{$blockURL}/JBar/helpers.js"));
//      }
      $pg = Page::getCurrentPage();
      $this->set('isEditMode', $pg->isEditMode());
		}
    
		function view(){ 
      $this->set('csscontent', $this->csscontent);            
		}
		
		function save($data) { 
			$args['csscontent'] = isset($data['csscontent']) ? $data['csscontent'] : '';      
			parent::save($args);
		}
		
	}
	
?>