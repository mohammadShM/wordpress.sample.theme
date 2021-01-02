<?php

require_once 'canExport.php';

class xmlExport implements canExport
{

	public function export(): string
	{
		return 'data format : xmlExport';
	}

}
