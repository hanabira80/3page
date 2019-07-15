<?

	$_index_page = 'index.php';
	$_homepage_home = '';
	$_homepage_root = $_SERVER['DOCUMENT_ROOT'].$_homepage_home;

	//echo $_SERVER['HTTP_REFERER'];
	if(strpos($_SERVER['HTTP_REFERER'], 'facebook')) {
		//include(dirname(__FILE__).'/include/main_facebook.php');
		include(dirname(__FILE__).'/include/main_basic.php');
	}
	else if(strpos($_SERVER['HTTP_REFERER'], 'naver')){
		if($_GET['bykey'] == 'movie') {
			include(dirname(__FILE__).'/include/main_naver.php');
		}
		else if($_GET['bykey'] == 'photo') {
			include(dirname(__FILE__).'/include/main_naver.php');
		}
		else {
			//include(dirname(__FILE__).'/include/main_naver.php');
			include(dirname(__FILE__).'/include/main_basic.php');
		}
	}
	else {
		include(dirname(__FILE__).'/main.php');
		//include(dirname(__FILE__).'/include/main_basic.php');
	}
	exit;
?>
