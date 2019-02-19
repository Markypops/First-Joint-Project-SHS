
<?php
$html = "";
$url = $_POST['url'];
$xml = simplexml_load_file($url);
echo "<html><form action = 'searchbar.php' method = 'POST'><input type = 'submit' value = 'Search again'></form></html>";
    for($i = 0;$i < 10;$i++)
    {
        $title = $xml->channel->item[$i]->title;
        $link = $xml->channel->item[$i]->link;
        $desc = $xml->channel->item[$i]->description;
        $html = "<!DOCTYPE html>
        <html>
        <head>
            <title>Results</title>
        </head>
        <body>
            
        <div>
            <h2>$title</h2>
            <h3><p>$desc</p></h3><br>
            <a href='$link' target='_blank'>$link</a>
        </div>  
            
        </body>
        </html>";
        echo $html;
    }

?>
