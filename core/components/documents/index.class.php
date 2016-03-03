<?php

/**
 * Class DocumentsMainController
 */
abstract class DocumentsMainController extends modExtraManagerController {
	/** @var Documents $Documents */
	public $Documents;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('documents_core_path', null, $this->modx->getOption('core_path') . 'components/documents/');
		require_once $corePath . 'model/documents/documents.class.php';

		$this->Documents = new Documents($this->modx);
		//$this->addCss($this->Documents->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->Documents->config['jsUrl'] . 'mgr/documents.js');
		$this->addHtml('
		<script type="text/javascript">
			Documents.config = ' . $this->modx->toJSON($this->Documents->config) . ';
			Documents.config.connector_url = "' . $this->Documents->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('documents:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends DocumentsMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}