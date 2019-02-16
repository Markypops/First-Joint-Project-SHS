<?php
include 'conndb.php';
$html = "";
$url = $_POST['url'];
$xml = simplexml_load_file($url);


    for($i = 0;$i < 10;$i++)
    {
        $title = $xml->channel->item[$i]->title;
        $link = $xml->channel->item[$i]->link;
        $desc = $xml->channel->item[$i]->description;
        $html .= "<div><h2>$title</h2><h3>$desc</h3><br>$link</div>";

    }

echo $html;

?>