<body>
    <center>
        <div class="container">
 <img src="img.jpg" alt="Snow" height="1000px" width="1720px">
  <div class="bottom-left"></div>
  <div class="top-left"></div>
  <div class="top-right"></div>
  <div class="bottom-right"></div>
  <div class="centered"></div>
</div>
class
        
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
	echo $conn->error;
}

    echo ("<html>
    <body>
        <p>$title <br></p>
        $desc<br>
        $link<br>
    
    </body>
    </html>");

?>
