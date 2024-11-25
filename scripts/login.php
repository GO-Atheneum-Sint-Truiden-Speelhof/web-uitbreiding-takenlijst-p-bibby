<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> login </h1>

<?php if (isset($_POST["username"]) && !empty($_POST["username"])){
    $servername = 'localhost';
    $database = 'database';
    $db_user = 'root';
    $db_pwd = ' ';

    $conn = new mysqli($servername, $db_user, $db_pwd, $database);
    if ($conn->connect_errno){
        echo 'Failed to connect: '.$conn->connect_error;
    }
    $qry = "SELECT Password FROM users WHERE username = ' ".$_POST["username"]."'";
    echo $qry;
    

}

<form action= 'index.php' method='post'>

    <label for= 'username'> Gebruikersnaam: </label>
    <input name= 'username' id='username' type= 'text'>
    <label for = 'paswoord'> Paswoord: </label>
    <input name= 'paswoord' id= 'paswoord' type= 'paswoord'>
    <button type ='submit'> Login: </button>



</form>
<?php






























</body>
</html>