<!-- /usr/local/bin/php -q /home/navneet94/public_html/Chronpage.php -->
<!-- sample chron page -->
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title></title>
</head>
<body>

</body>
</html>
<?php 	
	try {
		$msg = "message passed here";
		try {
			mail("navneet_prakash_singh@live.com", "Localhost test mail", $msg);	
		} catch (Exception $e) {
			print_r($e);
		}		
		die;
		$jsonRecieved = file_get_contents("https://bitbns.com/order/getTickerWithVolume");
		$jsonDecoded = json_decode($jsonRecieved);		
		$searchKeys = array('XRP' => '60', 'XLM' => '30' );
		$finalString="";
		foreach ($jsonDecoded as $jsonKey => $jsonValue) {
			foreach ($searchKeys as $searchKey =>$searchValue) {
				if ($jsonKey == $searchKey && $jsonValue->yes_price >= $searchValue) {
					$finalString = $finalString." ".$jsonKey." current value :".$jsonValue->yes_price." value has exceeded the desirable value, time to sell <br>";
				}
			}
		}
		if($finalString){
			$introSrting = "Mail shot with the following message : <br>";
			$msg = $introSrting.$finalString;
			mail("navneet_prakash_singh@live.com", "Price Exceeded Desired Value", $msg);	

		}else{
			#empty mail, dont send it
		}
	} catch (Exception $e) {
		print_r($e);
	}		
 ?>
