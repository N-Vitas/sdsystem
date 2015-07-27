<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "php/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

/*class Controller_Staff extends Controller {
 
    public function action_index()
    {*/
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
		->json();
       /* //$this->response->body('hello, world!');
    }
}*/
