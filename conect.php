<?php
function connectToDatabase(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
return $conn;
}


function saveToDatabase(){
$conn = connectToDatabase();
$sql = "INSERT INTO taken (Taak, Uitleg, Deadline)
VALUES ('".$_POST["taskName"]."','".$_POST["taskDescription"]."','".$_POST["taskDeadline"]."');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

function login(){
    $conn = connectToDatabase();
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        $sql = "SELECT *FROM `gebruikers` WHERE Username = '$username' and Password = '$password'";  
        $result = $conn->query($sql);
          
        if($result->num_rows > 0){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
        $conn->close();
    }


function PrintDataBase(){
    $conn = connectToDataBase();
    $sql = "SELECT * FROM taken";

    $result = $conn->query($sql);
    while ($row = $result->fetch_row()){
        echo '<tr>';
        for ($i = 1; $i < count($row); $i++){
            echo "<td>";
            echo "$row[$i]";
            echo "</td>";
        }
        echo "<td><a href='begin.php?page=wijzig&id=".$row[0]."'><</a>";
        echo "<td><a href='begin.php?page=start&id=".$row[0]."&actie=delete'></a>";
        echo "</tr>";
    }
}