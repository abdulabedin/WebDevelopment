
<?php include ('dbconnect.php'); ?>
<?php
echo "<br>";
echo "Total Number of Images in Database is 10";
$provinces = $_POST['province'];
$dates = $_POST['date'];

$sql = "SELECT * FROM Photographs WHERE location_ = '$provinces' AND date_taken = '$dates'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "<div style='position:absolute;left:660px;top:310px;color:Orange;font-weight:bold;font-size:40px'>";
    echo "User Selected Picture";
    echo "</div>";
    echo "<figcaption style='position:absolute;left:610px;top:370px;color:red;font-weight:bold;font-size:20px'>";
    echo $row["subject_"];
         $row["location_"];
    echo  "</figcaption>";
    echo "<br> <br>";
    echo "<img src=";
    echo $row["picture_url"];
    echo " width='500px' height='250px' alt='not found'  style='position:absolute;left:600px;top:410px'> ";
    echo "<br>";
}
} 

echo "<img src='https://peakvisor.com/img/news/Calgary-Alberta.jpg'";
    echo " width='500px' height='250px' alt='not found'  style='position:absolute;left:600px;top:750px'> ";

    echo "<div style='position:absolute;left:720px;top:670px;color:Orange;font-weight:bold;font-size:40px'>";
    echo "Random Picture";
    echo "</div>";
    echo "<figcaption style='position:absolute;left:720px;top:720px;color:red;font-weight:bold;font-size:20px'>";
    
    echo "Calgary Mountains - Alberta";
    echo  "</figcaption>";


    
    echo "<br> <br>";
$sql = "SELECT * FROM Photographs ORDER BY `date_taken` DESC";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "<span style='color:red;font-weight:bold'> Subject:  </span>"; 
    echo  $row["subject_"]; 
    echo  "<span style='color:green;font-weight:bold;position:absolute;left:500px'> Location: </span>";  
    echo "<span style='position:absolute;left:580px'>";  
    echo $row['location_'];
    echo "</span>";     
    echo   "<span style='color:blue;font-weight:bold;position:absolute;left:740px'> Date: </span>"; 
    echo "<span style='position:absolute;left:790px'>";  
    echo $row["date_taken"];
    echo "</span>";
    
    echo "<br>";
  }
} else {
  echo "No results.";
}
echo "<br>";

echo "<div style='color:Orange;font-weight:bold;font-size:40px'>";
    echo "Pictures From Ontario";
    echo "</div>";

echo "<br>";
$sql = "SELECT * FROM Photographs WHERE location_ LIKE 'Ontario'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "<figcaption style='position:absolute;left:70px;color:red;font-weight:bold;font-size:20px'>";
    echo $row["subject_"];
         $row["location_"];
    echo  "</figcaption>";
    echo "<br> <br>";
    echo "<img src=";
    echo $row["picture_url"];
    echo " width='500px' height='250px' alt='not found'  style='margin-left:20px;margin-bottom:30px'> ";
    echo "<br>";
  



    // echo $row["picture_url"] . " " . $row["location_"] . " " . $row["date_taken"] .  $row["picture_url"] . "<br>";

    // echo "<img src=" 
    // echo  $row["picture_url"];
    // echo ">"
  }
} else {
  echo "No results.";
}

mysqli_close($connect);

?>

