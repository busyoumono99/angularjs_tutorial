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
class ToutorialController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Toutorial';

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
	public function index() {}
	public function step00() {}
	public function step01() {}
	public function step02() {}
	public function step03() {}
	public function step04() {}
	public function step05() {}
	public function step06() {}
	public function step07() {}
	public function step08() {}
	public function step09() {}
	public function step10() {}
	public function step11() {}
	public function step12() {}

	public function beforeFilter() {
		parent :: beforeFilter();
	}
}
