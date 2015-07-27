<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_User extends ORM {
	protected $_table_name = 'users';

	public static function unique_name($name){
    // Check if the username already exists in the database
    return ! DB::select(array(DB::expr('COUNT(name)'), 'total'))
        ->from('users')
        ->where('name', '=', $name)
        ->execute()
        ->get('total');
    }
}
