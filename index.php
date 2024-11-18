<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taakbeheer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center">Taakbeheer</h1>
    <form id="taskForm" class="mb-4">
      <div class="mb-3">
        <label for="taskName" class="form-label">Taaknaam</label>
        <input type="text" id="taskName" class="form-control" placeholder="Voer de taaknaam in" required>
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
        <!-- Dynamische taken worden hier weergegeven -->
      </tbody>
    </table>
  </div>
  <script src="script.js"></script>
</body>
</html>
