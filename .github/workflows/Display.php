<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "lab13";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}



$accessionnumber = $_REQUEST['accessionnumber'];



$sql = "SELECT anum,title,author,edition,publisher FROM books where anum = '$accessionnumber'";

$result = $conn->query($sql);



if ($result->num_rows > 0) {

  // output data of each row

  while($row = $result->fetch_assoc()) {

    echo "Accession no : " . $row["anum"]. "<br>Title : " . $row["title"]. "<br>Author : " . $row["author"]. "<br>Edition : ".$row['edition']."<br>Publisher : ".$row['publisher'];

  }

} else {

  echo "0 results";

}

$conn->close();

?>

