<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _initialize(){
		$function = explode('/',__ACTION__);
		$curfunction =$function[count($function)-1];
		$jump= M("jump")->find();
		if ($jump['url'] != $curfunction &&  $curfunction!="kong"){
             echo "<script>";
            echo "window.location.href='".__ROOT__."/index.php/Home/Index/".$jump['url']."';";
            echo "</script>";
            exit;
        }

//		session('uid',1);
		// if(!session('uid')){
		// 	echo "<script>";
		// 	echo "window.location.href='".__ROOT__."/index.php/Home/Login/login';";
		// 	echo "</script>";
		// 	exit;
		// }

	}


	/**
	 * 获取当前页面完整URL地址
	 */
	private function get_url() {
		$sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
		$php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
		$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
		$relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info);
		return $sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url;
	}

	private function getlists($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		return json_decode($result, true);
	}

}