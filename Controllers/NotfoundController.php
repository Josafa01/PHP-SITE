<?php
namespace Controllers;

use \Core\Controller;

class NotfoundController extends Controller {

	public function index() {
		$array = array();

		$this->setLoadView('404', $array);
	}

}