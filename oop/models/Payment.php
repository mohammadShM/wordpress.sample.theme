<?php
/** @noinspection UnknownInspectionInspection */
/** @noinspection PhpUnused */

require_once '../db.php';

class Payment extends db
{

	public $table;

	public function __construct()
	{
		$this->table = 'payments';
	}

	public function get_all_payment_by_user_id($user_id): string
	{
		/** @noinspection SqlNoDataSourceInspection */
		return "SELECT * FROM {$this->table} WHERE payment_user_id={$user_id}";
	}

}
