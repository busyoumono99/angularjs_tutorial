<?php
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package		app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class JsonController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Json';

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
  * コンポーネントの設定
  */
	public $components = array('Tools.ApiTool','RequestHandler');

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

	public function api_get($type = null){
		// リクエストをデバッグログに書き出し
		$this->ApiTool->logingRequest($this->request);
		// 引数チェック。空か、指定タイプ以外だったら404エラー
		$this->ApiTool->checkType($type,array('phones'));
		// タイプごとにphonesを作り分ける。
		if ($type == 'phones'){
		 $phones = $this->__getPhones();
		 // debug($phones);die;
		 $this->set('phones',$phones);
		}
		// ビュークラスをJSONにする
		$this->viewClass = 'Json';
		$this->set('_serialize', array('phones'));
	}

	public function api_get2($type = null){
		// リクエストをデバッグログに書き出し
		$this->ApiTool->logingRequest($this->request);
		// 引数チェック。空か、指定タイプ以外だったら404エラー
		$this->ApiTool->checkType($type,array('phones'));
		// タイプごとにphonesを作り分ける。
		if ($type == 'phones'){
		 $phones = $this->__getPhones();
		 // debug($phones);die;
		 $this->set('phones',$phones);
		}
		// JSON用としてレスポンスを返す
		return new CakeResponse(array('body' => json_encode($phones)));
	}

	public function beforeFilter() {
		parent :: beforeFilter();
	}

	//スマートフォンのデータ。配列で返す。
	public function __getPhones(){
		$phones = array(
				array(
					"age"=> 0, 
					"id"=> "motorola-xoom-with-wi-fi", 
					"imageUrl"=> "img/phones/motorola-xoom-with-wi-fi.0.jpg", 
					"name"=> "Motorola XOOM™ with Wi-Fi", 
					"snippet"=> "The Next, Next Generation\r\n\r\nExperience the future with Motorola XOOM with Wi-Fi, the world's first tablet powered by Android 3.0 (Honeycomb)."
				), 
				array(
					"age"=> 1, 
					"id"=> "motorola-xoom", 
					"imageUrl"=> "img/phones/motorola-xoom.0.jpg", 
					"name"=> "MOTOROLA XOOM™", 
					"snippet"=> "The Next, Next Generation\n\nExperience the future with MOTOROLA XOOM, the world's first tablet powered by Android 3.0 (Honeycomb)."
				), 
				array(
					"age"=> 2, 
					"carrier"=> "AT&amp;T", 
					"id"=> "motorola-atrix-4g", 
					"imageUrl"=> "img/phones/motorola-atrix-4g.0.jpg", 
					"name"=> "MOTOROLA ATRIX™ 4G", 
					"snippet"=> "MOTOROLA ATRIX 4G the world's most powerful smartphone."
				), 
				array(
					"age"=> 3, 
					"id"=> "dell-streak-7", 
					"imageUrl"=> "img/phones/dell-streak-7.0.jpg", 
					"name"=> "Dell Streak 7", 
					"snippet"=> "Introducing Dell™ Streak 7. Share photos, videos and movies together. It's small enough to carry around, big enough to gather around."
				), 
				array(
					"age"=> 4, 
					"carrier"=> "Cellular South", 
					"id"=> "samsung-gem", 
					"imageUrl"=> "img/phones/samsung-gem.0.jpg", 
					"name"=> "Samsung Gem™", 
					"snippet"=> "The Samsung Gem™ brings you everything that you would expect and more from a touch display smart phone - more apps, more features and a more affordable price."
				), 
				array(
					"age"=> 5, 
					"carrier"=> "Dell", 
					"id"=> "dell-venue", 
					"imageUrl"=> "img/phones/dell-venue.0.jpg", 
					"name"=> "Dell Venue", 
					"snippet"=> "The Dell Venue; Your Personal Express Lane to Everything"
				), 
				array(
					"age"=> 6, 
					"carrier"=> "Best Buy", 
					"id"=> "nexus-s", 
					"imageUrl"=> "img/phones/nexus-s.0.jpg", 
					"name"=> "Nexus S", 
					"snippet"=> "Fast just got faster with Nexus S. A pure Google experience, Nexus S is the first phone to run Gingerbread (Android 2.3), the fastest version of Android yet."
				), 
				array(
					"age"=> 7, 
					"carrier"=> "Cellular South", 
					"id"=> "lg-axis", 
					"imageUrl"=> "img/phones/lg-axis.0.jpg", 
					"name"=> "LG Axis", 
					"snippet"=> "Android Powered, Google Maps Navigation, 5 Customizable Home Screens"
				), 
				array(
					"age"=> 8, 
					"id"=> "samsung-galaxy-tab", 
					"imageUrl"=> "img/phones/samsung-galaxy-tab.0.jpg", 
					"name"=> "Samsung Galaxy Tab™", 
					"snippet"=> "Feel Free to Tab™. The Samsung Galaxy Tab™ brings you an ultra-mobile entertainment experience through its 7” display, high-power processor and Adobe® Flash® Player compatibility."
				), 
				array(
					"age"=> 9, 
					"carrier"=> "Cellular South", 
					"id"=> "samsung-showcase-a-galaxy-s-phone", 
					"imageUrl"=> "img/phones/samsung-showcase-a-galaxy-s-phone.0.jpg", 
					"name"=> "Samsung Showcase™ a Galaxy S™ phone", 
					"snippet"=> "The Samsung Showcase™ delivers a cinema quality experience like you've never seen before. Its innovative 4” touch display technology provides rich picture brilliance, even outdoors"
				), 
				array(
					"age"=> 10, 
					"carrier"=> "Verizon", 
					"id"=> "droid-2-global-by-motorola", 
					"imageUrl"=> "img/phones/droid-2-global-by-motorola.0.jpg", 
					"name"=> "DROID™ 2 Global by Motorola", 
					"snippet"=> "The first smartphone with a 1.2 GHz processor and global capabilities."
				), 
				array(
					"age"=> 11, 
					"carrier"=> "Verizon", 
					"id"=> "droid-pro-by-motorola", 
					"imageUrl"=> "img/phones/droid-pro-by-motorola.0.jpg", 
					"name"=> "DROID™ Pro by Motorola", 
					"snippet"=> "The next generation of DOES."
				), 
				array(
					"age"=> 12, 
					"carrier"=> "AT&amp;T", 
					"id"=> "motorola-bravo-with-motoblur", 
					"imageUrl"=> "img/phones/motorola-bravo-with-motoblur.0.jpg", 
					"name"=> "MOTOROLA BRAVO™ with MOTOBLUR™", 
					"snippet"=> "An experience to cheer about."
				), 
				array(
					"age"=> 13, 
					"carrier"=> "T-Mobile", 
					"id"=> "motorola-defy-with-motoblur", 
					"imageUrl"=> "img/phones/motorola-defy-with-motoblur.0.jpg", 
					"name"=> "Motorola DEFY™ with MOTOBLUR™", 
					"snippet"=> "Are you ready for everything life throws your way?"
				), 
				array(
					"age"=> 14, 
					"carrier"=> "T-Mobile", 
					"id"=> "t-mobile-mytouch-4g", 
					"imageUrl"=> "img/phones/t-mobile-mytouch-4g.0.jpg", 
					"name"=> "T-Mobile myTouch 4G", 
					"snippet"=> "The T-Mobile myTouch 4G is a premium smartphone designed to deliver blazing fast 4G speeds so that you can video chat from practically anywhere, with or without Wi-Fi."
				), 
				array(
					"age"=> 15, 
					"carrier"=> "US Cellular", 
					"id"=> "samsung-mesmerize-a-galaxy-s-phone", 
					"imageUrl"=> "img/phones/samsung-mesmerize-a-galaxy-s-phone.0.jpg", 
					"name"=> "Samsung Mesmerize™ a Galaxy S™ phone", 
					"snippet"=> "The Samsung Mesmerize™ delivers a cinema quality experience like you've never seen before. Its innovative 4” touch display technology provides rich picture brilliance,even outdoors"
				), 
				array(
					"age"=> 16, 
					"carrier"=> "Sprint", 
					"id"=> "sanyo-zio", 
					"imageUrl"=> "img/phones/sanyo-zio.0.jpg", 
					"name"=> "SANYO ZIO", 
					"snippet"=> "The Sanyo Zio by Kyocera is an Android smartphone with a combination of ultra-sleek styling, strong performance and unprecedented value."
				), 
				array(
					"age"=> 17, 
					"id"=> "samsung-transform", 
					"imageUrl"=> "img/phones/samsung-transform.0.jpg", 
					"name"=> "Samsung Transform™", 
					"snippet"=> "The Samsung Transform™ brings you a fun way to customize your Android powered touch screen phone to just the way you like it through your favorite themed “Sprint ID Service Pack”."
				), 
				array(
					"age"=> 18, 
					"id"=> "t-mobile-g2", 
					"imageUrl"=> "img/phones/t-mobile-g2.0.jpg", 
					"name"=> "T-Mobile G2", 
					"snippet"=> "The T-Mobile G2 with Google is the first smartphone built for 4G speeds on T-Mobile's new network. Get the information you need, faster than you ever thought possible."
				), 
				array(
					"age"=> 19, 
					"id"=> "motorola-charm-with-motoblur", 
					"imageUrl"=> "img/phones/motorola-charm-with-motoblur.0.jpg", 
					"name"=> "Motorola CHARM™ with MOTOBLUR™", 
					"snippet"=> "Motorola CHARM fits easily in your pocket or palm.  Includes MOTOBLUR service."
				)
		);
		return $phones;
	}
}
