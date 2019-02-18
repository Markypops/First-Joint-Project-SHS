<html>
<body>
    <center>

        <h1> RSS IMMERSION </h1>
    <form action="rssparser.php" method = "POST">
    <input type="text" name = "url" placeholder = "Paste RSS URL" autocomplete = "OFF">
    <input type="submit" value = "Submit">
    
    </form>
    <br>
    <br>
    </center>
</body>

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
        $html .= "<div><h2>$title</h2><h3>$desc</h3><br><a href='$link' target='_blank'>$link</a></div>";

        $sql = "INSERT INTO tbl_news_fragments(title,link,description) values('$title', '$link','$desc')";
        $result = $conn->query($sql);
    
    }
echo $html;
?>
<?php
include 'conndb.php';

$sql = "SELECT * FROM tbl_news_fragments";
$result=$conn->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        $title = $row['title'];
        $link = $row['link'];
        $desc = $row['description'];

    }
}
else
{
    echo"Error 408: Login information not found";
}

    echo ("<html>
    <body>
        <p>$title <br></p>
        $desc<br>
        $link<br>
    
    </body>
    </html>");
?>

