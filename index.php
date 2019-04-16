<?php
$url1=$_SERVER['REQUEST_URI']; header("Refresh: 300; URL=$url1");
$link ="https://www.instructables.com/json-api/showAuthorStats?screenName=Maker+Saga";
$json = file_get_contents($link);
$obj = json_decode($json);
$viewscookie = "cookietitle";
$viewscount = $obj->views;
if (!isset($_COOKIE[$viewscookie])) {
setcookie($viewscookie, $viewscount, time() + (86400 *1), "/");  // 86400 seconds = 1 day;
echo "<html><style>body { font-size: 300%; font-family: Arial; color: cyan; background-color: black;}</style><body><h1>Tracking Instructables.com  user's tutorial articles for view increases...</h1></body></html>";
}
else if (isset($_COOKIE[$viewscookie])) {
$cook = ($_COOKIE[$viewscookie]);
$total = $viewscount - $cook;
echo "<html><style>body { font-size: 300%; font-family: Arial; background-color: black;}</style><body></body></html>";
if ($total >= 2) {
setcookie($viewscookie, $viewscount, time() + (86400 *1), "/");  // 86400 seconds = 1 day
//echo "+ '" .$viewscount. "'views!";
echo "<html><style>body { font-size: 300%; font-family: Arial; color: yellow; background-color: black;}</style><body> <h1>+  $total
  views</h1> <h1>$viewscount total views</h1></body></html>";
echo "<script> var audio = new Audio('http://torchive.epizy.com/bell.wav'); audio.play();  </script>";
}
}
?>
