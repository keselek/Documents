<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var Documents $Documents */
$Documents = $modx->getService('documents', 'Documents', $modx->getOption('documents_core_path', null, $modx->getOption('core_path') . 'components/documents/') . 'model/documents/');
$modx->lexicon->load('documents:default');

// handle request
$corePath = $modx->getOption('documents_core_path', null, $modx->getOption('core_path') . 'components/documents/');
$path = $modx->getOption('processorsPath', $Documents->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));