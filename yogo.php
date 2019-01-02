<?php

echo "Token : ";
$token=trim(fgets(STDIN));
echo "tk : ";
$tk=trim(fgets(STDIN));
echo "uuid : ";
$uuid=trim(fgets(STDIN));
echo "sign : ";
$sign=trim(fgets(STDIN));
echo "Device Id : ";
$deviceid=trim(fgets(STDIN));
echo "sleep : ";
$wait=trim(fgets(STDIN));
echo "jumlah : ";
$jml=trim(fgets(STDIN));
$x=0;
while($x<$jml){
sleep($wait);
$x++;
flush();
$video = video($token, $tk, $uuid, $sign, $deviceid, $wait, $jml);
echo "Video $video\n";
}

function video($token, $tk, $uuid, $sign, $deviceid, $wait, $jml){

		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://api.yogopro.com/api/reward/watchVideo"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Content-Type: application/x-www-form-urlencoded";
                       "Content-Length: 690";
                       "Host: api.yogopro.com";
                       "Connection: Keep-Alive";
                       "Accept-Encoding: gzip";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; U; Android 5.1; in-id; B11 Build/LMY47D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30";

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}

?>
