<?php

trait logger
{

	public function log($data): void
	{
		echo "$data logged.";
	}


}

class sample
{

	use logger;
}

(new sample())->log('sample');
