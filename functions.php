<?php

function nima_func($id){
	echo "logged id is {$id}";
}

function nima_func2($id){
	$idd = $id + 10;
	echo "<br> and its my parent {$idd}";
}

class User{
	static public function Login($id){
		echo "logged id is {$id}";
	}
}

add_action('nkwpt', 'User::Login');
add_action('nkwpt', 'nima_func2');

$id = 10;

do_action('nkwpt',$id);