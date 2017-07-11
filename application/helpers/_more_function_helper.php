<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Author: Mr Loy Prathna
 * Email: prathna.loy@gmail.com
 * Tel: (+855) 78 963-141
 * Date start: Th-19-4-2014
 * Date Finish: Th-19-5-2014
 * Path: application/helper/MY_more_function_helper.php
 */
 
 // ------------------------------------------------------------------------
 
 if ( ! function_exists('pen'))
{
	function pen($num = ""){
		return $num * 22041992;
	}
}

 if ( ! function_exists('convertDate'))
{
	$change = "";
	$totalDate = "";
	function convertDate($dates = "")
	{
		date_default_timezone_set("Asia/Bangkok");
		$change = explode(' - ',$dates);//static date 11/11/2014 - 12/03/2014
		$now = strtotime($change[0]); // or your date as well
		$your_date = strtotime($change[1]);
		$datediff = $now - $your_date;
		$setDates = strtotime(date("Y/m/d"));
		$todays = $setDates-$your_date;
		return floor($todays/(86400));
	}
}

 if ( ! function_exists('getDiscountedPrice')){
	function getDiscountedPrice($amount, $percentage=""){
   	 	return $amount-($amount*($percentage/100));
	}
}

 if ( ! function_exists('StartWithSet'))
{
	$change = "";
	$totalDate = "";
	function StartWithSet($dates = "")
	{
		date_default_timezone_set("Asia/Bangkok");
		$change = explode(' - ',$dates);//static date 11/11/2014 - 12/03/2014
		$now = strtotime($change[0]); // or your date as well
		$your_date = strtotime(date("Y/m/d"));
		if($now==$your_date){
			return true;
		}else{
			return false;	
		}
	}
}

 if ( ! function_exists('pde'))
{
	function pde($num = "")
	{
		return $num / 22041992;
	}
}

if(! function_exists('replace_tag')){
	function replace_tag($description = ""){
		//http://php.net/manual/en/function.strip-tags.php
		return strip_tags($description);	
	}	
}
// unallow user to input tag style when read data
if(! function_exists('clearn')){
	function clearn($Texts=""){
		$RoleOfChar = array('@<script[^>]*?>.*?</script>@si',
		   '@<style[^>]*?>.*?</style>@siU',
		   '@<![\s\S]*?--[ \t\n\r]*>@',
		   '<script>',
		   '</script>',
		   '<script' 
		); 
		$text = str_replace($RoleOfChar, '', $Texts); 
		return $text; 	
	}
}

// unallow user to input tag style when read data
if(! function_exists('codeID')){
	function codeID($Texts=""){
		$code = "";
		$code = trim($Texts);
		return $code;
	}
}

if( ! function_exists('random_num')){
	function random_num($length = ""){
		$numbers = '1234567890';
		$randomNum = '';
		for ($i = 0; $i < $length; $i++) {
			$randomNum .= $numbers[rand(0, strlen($numbers) - 1)];
		}
		return $randomNum;	
	}
}

if( ! function_exists('random_str')){
	function random_str($length = ""){
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;	
	}
}

if(! function_exists('yesterday')){
	function yesterday($today = false){
		return date($today, strtotime("yesterday"));	
	}
}

if(! function_exists('weekly')){
	function weekly($today = false){
		return date($today, strtotime("-7 day"));	
	}
}

if( ! function_exists('random_char')){
	function random_char($length = ""){
		// ? # and & are effect with base url of broswer.
		$chars = '~`!@$%^*("<>)_+-[]\|;:\,./';
		$randomChar = '';
		for ($i = 0; $i < $length; $i++) {
			$randomChar .= $chars[rand(0, strlen($chars) - 1)];
		}
		return $randomChar;	
	}
}

if( ! function_exists('random_multi')){
	function random_multi($length = ""){
		// ? # and & are effect with base url of broswer.
		$chars = '012345678?90abcdefghijklmnopqrstuvwxyzABCDEFGHIJK&LMNOPQRSTUVWXYZ';
		$randomChar = '';
		for ($i = 0; $i < $length; $i++) {
			$randomChar .= $chars[rand(0, strlen($chars) - 1)];
		}
		return $randomChar;	
	}
}

if( ! function_exists('random_both')){
	function random_both($length = ""){
		$characters = '12345abcdefghijklmnopqrstuvwxyz67890';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;	
	}
}


if( ! function_exists('md5_e()')){
	function md5_e($str = ""){
		$str = '';
		$space = trim(mysql_escape_string($str));
		return md5($space).random_both(4);
	}
}

if( ! function_exists('md5_d()')){
	function md5_d($str = ""){
		$str = '';
		$space = mysql_escape_string(trim($str));
		return substr(md5($space).random_both(4),0,-4);
	}
}

/// return count number

if( ! function_exists('counter_num()')){
	function counter_num($num = ""){
		$num = '';
		$space = mysql_escape_string(trim($num));
		if($space != 0){
			return $space;
		}else{
			return $space = "0";
		}
	}
}

// advance enscript primary key of db

if( ! function_exists('inputID()')){
	function inputID($str){
		/*$inputType;
		$num = "";*/
		$str = "";
		return $str;
		/*$inputType = 'inputOf:'.$str;
		$num = substr($inputType,0,8);
		//if(is_int($num)==TRUE){
			return $num;*/
		//}
		
	}
}

// function reload page.


  if ( ! function_exists('refresh'))
{
	function refresh($uri = "",$time = "")
	{
		?>
        <html>
        <head>
            <meta http-equiv=\"refresh\" content="<?php echo $time;?>;url=<?php echo site_url($uri);?>">
            <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
            <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
            <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet">

        <style>
				body { background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8yOS8xMiKqq3kAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzVxteM2AAABHklEQVRIib2Vyw6EIAxFW5idr///Qx9sfG3pLEyJ3tAwi5EmBqRo7vHawiEEERHS6x7MTMxMVv6+z3tPMUYSkfTM/R0fEaG2bbMv+Gc4nZzn+dN4HAcREa3r+hi3bcuu68jLskhVIlW073tWaYlQ9+F9IpqmSfq+fwskhdO/AwmUTJXrOuaRQNeRkOd5lq7rXmS5InmERKoER/QMvUAPlZDHcZRhGN4CSeGY+aHMqgcks5RrHv/eeh455x5KrMq2yHQdibDO6ncG/KZWL7M8xDyS1/MIO0NJqdULLS81X6/X6aR0nqBSJcPeZnlZrzN477NKURn2Nus8sjzmEII0TfMiyxUuxphVWjpJkbx0btUnshRihVv70Bv8ItXq6Asoi/ZiCbU6YgAAAABJRU5ErkJggg==);}
	.error-template {padding: 40px 15px;text-align: center;}
	.error-actions {margin-top:15px;margin-bottom:15px;}
	.error-actions .btn { margin-right:10px; }
		</style>
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="error-template">
                            <h1>
                                Oops!</h1>
                            <h2>
                                404 Not Found</h2>
                            <div class="error-details">
                                Sorry, an error has occured, Requested page not found!
                            </div>
                            <div class="error-actions">
                                <a href="#" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                                    Take Me Home </a><a href="#" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        <?php
	}
}
 ?>
