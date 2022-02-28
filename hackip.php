<?PHP
	
	echo get_ip();
	echo send_ip();
	
	
	
	function get_ip()
	{
	$value = '';
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$value = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$value = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} elseif (!empty($_SERVER['REMOTE_ADDR'])) {
		$value = $_SERVER['REMOTE_ADDR'];
	}
  
	return $value;
	}
	
	function send_ip()
	{
	mail("obzortovarov7@gmail.com", "IPGITHUBNICE!", $value);
	}
?>
