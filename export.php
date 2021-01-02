<?php
/** @noinspection AutoloadingIssuesInspection */

require_once 'oop/interfaces/htmlExport.php';
require_once 'oop/interfaces/jsonExport.php';
require_once 'oop/interfaces/xmlExport.php';
require_once 'oop/interfaces/canExport.php';

$export = 'xml';
$handler = $export . 'Export';
$handlerObject = new $handler;

// Strategy Pattern ===========================================================
class ExportHandler
{

	public function doExport(canExport $handler): void
	{
		echo $handler->export();
	}

}

$object = new ExportHandler();
$object->doExport($handlerObject);
