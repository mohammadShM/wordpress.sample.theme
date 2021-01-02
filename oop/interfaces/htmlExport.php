<?php

require_once 'canExport.php';

class htmlExport implements canExport
{

	public function export(): string
	{
		return 'data format : htmlExport';
	}

}
