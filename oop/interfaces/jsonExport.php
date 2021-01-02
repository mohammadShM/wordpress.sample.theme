<?php

require_once 'canExport.php';

class jsonExport implements canExport
{

	public function export(): string
	{
		return 'data format : jsonExport';
	}

}
