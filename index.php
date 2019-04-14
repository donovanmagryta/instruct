<?php 
$url1=$_SERVER['REQUEST_URI']; 
header("Refresh: 180; URL=$url1"); 
$link ="http://www.instructables .com/jso-api/showAuthorStats?screenName=Maker+Saga"; 
$json = file_get_contents($link);
 $obj = json_decode($json);
 $viewscookie = "cookietitle";
 $viewscount = $obj->views;
 if (!isset($_COOKIE[$viewscookie])) { 
setcookie($viewscookie, $viewscount, time() + (86400 *1), "/");
 // 86400 seconds = 1 day; 
echo "cookie set"; 
echo $viewscount; 
} 
if (isset($_COOKIE[$viewscookie])) {
 if ($_COOKIE[$viewscookie] - $viewscount >= 5) {
 //$myAudioFile = "bell.wav";
 //echo '<EMBED SRC="'.$myAudioFile.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>'; 
echo "plus '" .$_COOKIE[$viewscookie]. "'views";
 setcookie($viewscookie, $viewscount, time() + (86400 *1), "/"); 
// 86400 seconds = 1 day; 
}
 }
 ?> 
