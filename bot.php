<?php
echo "token : ";
$token = trim(fgets(STDIN));
echo "sign : ";
$sign = trim(fgets(STDIN));
echo "tk : ";
$tk = trim(fgets(STDIN));
echo "uuid : ";
$uuid = trim(fgets(STDIN));

while(1){
   $ch = curl_init();
   $rand = (1, 99999999);
   $body = "OSVersion='.$rand.'&content_id='.$rand.'&deviceCode={"Gravity":"false","cpuCore":"4","deviceId":$rand,"cpuFreq":"0M 四核","ModelName":"B11","gps":"true","ModelBrand":"SPRD","Manufacturer":"SPRD","Display:".$rand."MemorySize":"1G","MacAddress":null}&imei=$rand&isemu=$rand&lang=in-ID&market=googleplay&phoneBrand=SPRD&pushType=getui&sign=$sign&smdid=$rand&time=$rand&tk=$tk&token=$token&uuid=$uuid&version=$rand&versionName=1.4.0&wifi=3G";
      curl_setopt($ch, CURLOPT_URL, "https://api.yogopro.com/api/reward/watchVideo");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
   $headers = array();
      $headers[] = "Accept-Language: in-ID,in;q=0.8";
      $headers[] = "User-Agent: Mozilla/5.0 (Linux; U; Android 5.1; in-id; B11 Build/LMY47D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30";
      $headers[] = "Content-Type: application/x-www-form-urlencoded";
      $headers[] = "Content-Length: 759"
      $headers[] = "Host : api.yogopro.com";
      $headers[] = "Connection: Keep-Alive";
      $headers[] = "Accept-Encoding: gzip";
      $headers[] = "Cache-Control: no-cache";
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     
$result=curl_exec($ch);
if (curl_error($ch)){
     echo 'Error'.curl_error($ch);
  }
curl_close($ch);

echo "Claim => ".json_decode($result,true)['msg']."<=\n";
}
?>

