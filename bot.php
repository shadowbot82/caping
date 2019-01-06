<?php
echo "token : ";
$token=trim(fgets(STDIN));
echo "jumlah : ";
$jml=trim(fgets(STDIN));
echo "sleep : ";
$wait=trim(fgets(STDIN));
$x=0;
while($x<$jml){
sleep($wait);
$x++;
flush();
echo "Suksess";



}

function video($token,$jml,$wait){
        $rand=(1, 99999);
        $ch = curl_init;
        curl_setopt($ch, CURLOPT_URL, "https://api.yogopro.com/api/reward/watchVideo");
        curl_setopt($ch, CURLPOT_RETURNTRNASFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        $result=curl_exec($ch);
        return $result;
        sleep($wait);
        $x++;
        flush();
        
        }
        
?>
