<?php
	App::uses('Model', 'Model');

class AppModel extends Model {
	public function dateFormatAfterFind($dateString) {
    	return date('d/m/Y', strtotime($dateString));
	}
	public function dateFormatBeforeFind($dateString){	
		return implode("-",array_reverse(explode("/",$dateString)));		
	}
}
