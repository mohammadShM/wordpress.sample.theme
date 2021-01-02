<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection AutoloadingIssuesInspection */
/** @noinspection UnknownInspectionInspection */

/** @noinspection PhpUnused */

abstract class OnlineGateway
{

	protected $options;

	public function __construct()
	{
		$this->options = array(
			'mellat' => array(
				'merchant' => '123456789',
				'username' => 'username',
				'password' => '123456789'
			),
			'saman' => array(
				'api_key' => '12345657674574657687687687'
			),
			'parsian' => array(
				'username' => 'username',
				'password' => '123456789'
			),
		);
	}

	abstract public function sendRequest();

	abstract public function verifyRequest();

}

class Mellat extends OnlineGateway
{

	private $gatewayName;
	private $mellat_options;

	public function __construct()
	{
		/** @noinspection UnusedConstructorDependenciesInspection */
		$this->gatewayName = 'mellat';
		parent::__construct();
		$this->mellat_options = $this->options[$this->gatewayName];
	}

	public function sendRequest(): void
	{
		var_dump($this->mellat_options);
	}

	public function verifyRequest(): void
	{

	}

}

//$mellat = new Mellat();
//$mellat->sendRequest();
$gateway = Factory::make('mellat');
$gateway->sendRequest();

// Factory Pattern ===========================================================
class Factory
{

	/** @noinspection PhpMissingReturnTypeInspection */
	public static function make($class)
	{
		$className = ucfirst($class);
		if (!class_exists($className)) {
			return false;
		}
		return new $className;
	}

}
