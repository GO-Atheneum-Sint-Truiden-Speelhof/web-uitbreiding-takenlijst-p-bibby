<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="opmaak/bootstrap.css">
  <title>Taakbeheer</title>
  <script src="scripts/bootstrap.js"></script>
</head>
<?php
    include("conect.php");
?>
<body>
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="login.php">Login</a>
  <a href="logout.php">Log out</a>
</div>
  <div class="container">
    <h1 class="text-center">Taakbeheer</h1>
    <form action="index.php" method="post">
      <div class="mb-3">
        <label for="taskName" class="form-label">Taaknaam</label>
        <input type="text" id="taskName" name="taskName" class="form-control" placeholder="Voer de taaknaam in" required>
      </div>
      <div class="mb-3">
        <label for="taskDescription" class="form-label">Omschrijving</label>
        <textarea id="taskDescription" class="form-control" placeholder="Voer een omschrijving in" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="taskDeadline" class="form-label">Deadline</label>
        <input type="date" id="taskDeadline" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Taak Toevoegen</button>
    </form>
    <?php saveToDataBase(); ?>
    <h2 class="text-center">Takenlijst</h2>
    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Taaknaam</th>
          <th>Omschrijving</th>
          <th>Deadline</th>
          <th>Acties</th>
        </tr>
      </thead>
      <tbody id="taskTableBody">
        <?php
            PrintDataBase();
        ?>
      </tbody>
    </table>
  </div>
  <script src="script.js"></script>
</body>
</html>