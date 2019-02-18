
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
        $etitle = mysqli_escape_string($conn, $title); 
        $elink = mysqli_escape_string($conn, $link);
        $edesc = mysqli_escape_string($conn, $desc);
        $stitle = stripslashes($etitle); 
        $slink = stripslashes($elink);
        $sdesc = stripslashes($edesc);

        $html .= "<div><h2>$stitle</h2><h3>$sdesc</h3><br><a href='$slink' target='_blank'>$slink</a></div>";

        $sql = "INSERT INTO tbl_news_fragments(title,link,description) values('$stitle', '$slink','$sdesc')";
        $result = $conn->query($sql);
    
        if($result === TRUE)
        {
            echo "Created Successfully!<br>";
        }
        else
        {
            echo $conn->error ."<br>";
        }
    }

echo $html;

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
        $etitle = mysqli_escape_string($conn, $title); 
        $elink = mysqli_escape_string($conn, $link);
        $edesc = mysqli_escape_string($conn, $desc);
        $stitle = stripslashes($etitle); 
        $slink = stripslashes($elink);
        $sdesc = stripslashes($edesc);

        $html .= "<div><h2>$stitle</h2><h3>$sdesc</h3><br><a href='$slink' target='_blank'>$slink</a></div>";

        $sql = "INSERT INTO tbl_news_fragments(title,link,description) values('$etitle', '$elink','$edesc')";
        $result = $conn->query($sql);
    
        if($result === TRUE)
        {
            echo "Created Successfully!<br>";
        }
        else
        {
            echo $conn->error ."<br>";
        }
    }

echo $html;
?>