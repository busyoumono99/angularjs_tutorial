<?php
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package	  app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class SitesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Sites';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * レイアウトを決める
 */
	public $layout = "common";

/**
 * ヘルパーを設定する。
 */
	public $helpers = array();
/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function index() {

		$title_for_layout = 'Home';
		$this->set(compact( 'title_for_layout'));
	}



	function beforeFilter()
	{
		parent :: beforeFilter();
		// $this->Auth->allow('*');
	}
}
