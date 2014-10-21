<?php
$meduza = file_get_contents("http://meduza.io/feed/all");
$pattern = "/<id>news\/.*?<\/id>/";
while (preg_match($pattern, $meduza)) {
    $meduza = preg_replace("/<id>news\/(.*?)<\/id>/", "<id>http://meduza.io/news/$1</id>", $meduza);
}
echo $meduza;
?>
