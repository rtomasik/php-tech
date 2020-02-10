<?php
function GST($url)
{
//$url=ClearSlashUrl($url);
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_TIMEOUT,CURLTIME);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, CURLTIME);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_COOKIEFILE,'cook.txt');
curl_setopt($ch,CURLOPT_COOKIEJAR,'cook.txt');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
$body=curl_exec($ch);
curl_close($ch);
return $body;
}

function GSTP($url,$data)
{
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_TIMEOUT,CURLTIME);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, CURLTIME);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_COOKIEFILE,'cook.txt');
curl_setopt($ch,CURLOPT_COOKIEJAR,'cook.txt');
//curl_setopt($ch,CURLOPT_REFERER,'');
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$body=curl_exec($ch);
curl_close($ch);
return $body;
}
?>
