<?php

class db
{

	public const HOST = 'HOST';
	public $table;
	public static $prefix = 'Prefix';

	/** @noinspection PhpUnused
	 * @noinspection UnknownInspectionInspection
	 */
	public function all(): string
	{
		/** @noinspection SqlNoDataSourceInspection */
		return "SELECT * FROM {$this->table}";
	}

	/** @noinspection PhpUnused
	 * @noinspection UnknownInspectionInspection
	 * @param $id
	 * @param null $columns
	 * @return string
	 */
	public function find($id, $columns = null): string
	{
//		/** @noinspection SqlNoDataSourceInspection */
//		return "SELECT * FROM {$this->table} WHERE id={$id}";
		$columns = !is_null($columns) ? implode(',', $columns) : '*';
		/** @noinspection SqlNoDataSourceInspection */
		return "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
	}

	/** @noinspection PhpUnused
	 * @noinspection UnknownInspectionInspection
	 * @param $id
	 * @return string
	 */
	public function delete($id): string
	{
		/** @noinspection SqlNoDataSourceInspection */
		return "DELETE FROM {$this->table} WHERE id={$id}";
	}

	/** @noinspection PhpUnused
	 * @noinspection UnknownInspectionInspection
	 */
	public static function export(): string
	{
		self::HOST;
		self::$prefix;
		return '';
	}

}

//$connection = new Db();
//$connection->table = "users";
//$connection->all();
//db::export();
