<?php

/**
 * The home manager controller for Documents.
 *
 */
class DocumentsHomeManagerController extends DocumentsMainController {
	/* @var Documents $Documents */
	public $Documents;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('documents');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->Documents->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->Documents->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->Documents->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->Documents->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->Documents->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->Documents->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->Documents->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "documents-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->Documents->config['templatesPath'] . 'home.tpl';
	}
}