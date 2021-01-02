<?php
/** @noinspection UnknownInspectionInspection */
/** @noinspection PhpUnused */

require_once '../db.php';

class Post extends db
{

	public $table;

	public function __construct()
	{
		$this->table = 'posts';
	}

}
