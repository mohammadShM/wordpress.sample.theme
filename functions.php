<?php
function is_user_logged_in(): bool
{
	return false;
}

function select_bg($color_name): string
{
	switch ($color_name) {
		case 'blue':
			$result = '#00c';
			break;
		case 'red':
			$result = '#c00';
			break;
		case 'green':
			$result = '#0c0';
			break;
		default:
			$result = '#cfcfcf';
			break;
	}
	return $result;
}

function get_users(): array
{
	return array(
		array('id'=>1,'name'=>'ali','email'=>'ali@gmail.com'),
		array('id'=>2,'name'=>'ahmad','email'=>'ahmad@gmail.com'),
		array('id'=>3,'name'=>'mohammad','email'=>'mohammad@gmail.com'),
		array('id'=>4,'name'=>'sam','email'=>'sam@gmail.com'),
		array('id'=>5,'name'=>'pedram','email'=>'pedram@gmail.com'),
		array('id'=>6,'name'=>'vahid','email'=>'vahid@gmail.com'),
		array('id'=>7,'name'=>'hasan','email'=>'hasan@gmail.com'),
		array('id'=>8,'name'=>'hosain','email'=>'hosain@gmail.com'),
		array('id'=>9,'name'=>'javad','email'=>'javad@gmail.com'),
		array('id'=>10,'name'=>'saeed','email'=>'saeed@gmail.com'),
	);
}