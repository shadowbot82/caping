<?php
echo "token : ";
$token=trim(fgets(STDIN));
echo "sign :";
$sign=trim(fgets(STDIN));
echo "jumlah : ";
$jml=trim(fgets(STDIN));
echo "sleep : ";
$wait=trim(fgets(STDIN));
$x=0;
while($x<$jml){
sleep($wait);
$x++;
flush();
echo " ==> Suksess   ";



}

function video($token,$sign,$jml,$wait){
 
        $ch = curl_init;
        curl_setopt($ch, CURLOPT_URL, "https://api.yogopro.com/api/reward/watchVideo");
        curl_setopt($ch, CURLPOT_RETURNTRNASFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        $result=curl_exec($ch);
        echo $result."\n";
        sleep($wait);
        $x++;
        flush();
        
        }
        
?>
