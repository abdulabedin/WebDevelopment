<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>


<body>
<?php 
$json = file_get_contents('test.json');
$array = json_decode($json, true);
$title=$array['data'][0]['track']['title'];
$artist=$array['data'][0]['track']['artist'];
$imageurl=$array['data'][0]['track']['imageurl'];
$date=$array['data'][0]['date'];
$time=$array['data'][0]['time'];

echo "<style>";
echo "body{background-image: url('https://wallpaperaccess.com/full/4727334.jpg');}";
echo "</style>";
echo "<body style='margin-left:600px;margin-top:100px';>";
echo "<div style='font-size:50px;color:green;margin-left:75px;font-weight:bold'>Now Playing </div>";
echo "<br>";
echo "<img style=\"margin-left:40px;\"src='$imageurl'>";
echo "<br><br>";
echo "<div style=\"font-size:30px;color:white;\"> Title: ".$title;
echo "</div>";
echo "<div style=\"font-size:30px;color:white;margin-left:120px;\">";
echo "Artist: ". $artist;
echo "</div>";
echo "<div style=\"font-size:30px;color:white;\">";
echo "Date: ". $date." ".$time." HST";
echo "<br>";
echo "</div>";
echo "</body>";
?>
</body>

</html>