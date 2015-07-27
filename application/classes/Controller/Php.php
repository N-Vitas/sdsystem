<?php defined('SYSPATH') or die('No direct script access.');
		// DataTables PHP library
		//include( EDITPATH."php/DataTables.php" );
		//include( EDITPATH.'php/config.php' );

		// Alias Editor classes so they are easy to use
		/*use
			DataTables\Editor,
			DataTables\Editor\Field,
			DataTables\Editor\Format,
			DataTables\Editor\Join,
			DataTables\Editor\Upload,
			DataTables\Editor\Validate;
 */
class Controller_Php extends Controller {
 
    public function action_index()
    {
        $this->response->body('hello, world!');
    }
    public function action_staff()
    {
		
		/*include( EDITPATH."php/DataTables.php" );
		//$db = new Database( $sql_details );
		var_dump(Editor);
		// Build our Editor instance and process the data coming from _POST
		Editor::inst( $db, 'items' )
		->fields(
			Field::inst( 'name' )->validator( 'Validate::notEmpty' ),
			Field::inst( 'contact' )->validator( 'Validate::numeric' ),
			Field::inst( 'state' )->validator( 'Validate::notEmpty' ),
			Field::inst( 'scool' )->validator( 'Validate::notEmpty' ),
			Field::inst( 'job' )->validator( 'Validate::notEmpty' ),
			Field::inst( 'invalid' )->validator( 'Validate::notEmpty' ),
			Field::inst( 'diagnos' )->validator( 'Validate::notEmpty' ),
			Field::inst( 'ipr' )->validator( 'Validate::notEmpty' ),
			Field::inst( 'myjob' )->validator( 'Validate::notEmpty' ),
			Field::inst( 'advanset' )->validator( 'Validate::notEmpty' ),
			Field::inst( 'birthday' )->validator( 'Validate::dateFormat', array(
					"format"  => Format::DATE_ISO_8601,
					"message" => "Please enter a date in the format yyyy-mm-dd"
				) )
				->getFormatter( 'Format::date_sql_to_format', Format::DATE_ISO_8601 )
				->setFormatter( 'Format::date_format_to_sql', Format::DATE_ISO_8601 )
		)
		->process( $_POST )
		->json();*/
		$item = ORM::factory('item')->find_all();
		foreach($item as $val)
		{	
			$data[] = array(
				"DT_RowId" => $val->id,
				/*"num" => $val->id,*/
				"name" => $val->name,
				"birthday" => $val->birthday,
				"contact" => $val->contact,
				"state" => $val->state,
				"scool" => $val->scool,
				"job" => $val->job,
				"invalid" => $val->invalid,
				"diagnos" => $val->diagnos,
				"ipr" => $val->ipr,
				"advanset" => $val->advanset,
				"myjob" => $val->myjob,
			);
		}
		$content = array(
		  "data" => $data,
		  "options" => array(),
		);
        // Передаем данные в шаблон по умолчанию - main.php
        echo json_encode($content);
    }
}
		
    /*public function action_staff()
    { 
		$item = ORM::factory('item')->find_all();
		foreach($item as $val)
		{	
			$data[] = array(
				"DT_RowId" => "row_".$val->id,
				"id" => $val->id,
				"name" => $val->name,
				"birthday" => $val->birthday,
				"contact" => $val->contact,
				"state" => $val->state,
				"scool" => $val->scool,
				"job" => $val->job,
				"invalid" => $val->invalid,
				"diagnos" => $val->diagnos,
				"ipr" => $val->ipr,
				"advanset" => $val->advanset,
				"myjob" => $val->myjob,
			);
		}
		$content = array(
		  "data" => $data,
		  "options" => array(),
		);
        // Передаем данные в шаблон по умолчанию - main.php
        echo json_encode($content);
    }*/
