<html>

<body>
    <center>
         <br> <br> <br>
        <h1> RSS IMMERSION </h1>
        <br> <br> <br>
    <form action="rssparser.php" method = "POST">
    <input type="text" name = "url" placeholder = "Paste RSS URL" autocomplete = "OFF">
    <input type="submit" value = "Submit">
    
    </form>
    <br>
    <br>
    </center>
</body>



</html>

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

