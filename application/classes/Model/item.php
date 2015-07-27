<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Item extends ORM {
	protected $_table_name = 'items';
	
	public static function unique_name($name){
    // Check if the username already exists in the database
    return ! DB::select(array(DB::expr('COUNT(name)'), 'total'))
        ->from('items')
        ->where('name', '=', $name)
        ->execute()
        ->get('total');
    }
}
