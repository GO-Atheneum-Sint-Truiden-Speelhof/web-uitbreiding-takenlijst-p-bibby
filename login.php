<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="opmaak/bootstrap.css">
  <title>Taakbeheer</title>
  <script src="scripts/bootstrap.js"></script>
</head>

<body>
<form action="index.php?page=login" method="post">
  
  <div class="container">
    <label for="user"><b>Username</b></label>
    <input type="text" id="user" name="uname" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" id="pass" name="pass" required>

    <button type="submit">Login</button>    
  
</form>
</body>
</html>
