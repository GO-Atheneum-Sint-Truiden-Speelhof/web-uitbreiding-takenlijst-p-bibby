let tasks = [];
let taskId = 0;


const taskForm = document.getElementById('taskForm');
const taskName = document.getElementById('taskName');
const taskDescription = document.getElementById('taskDescription');
const taskDeadline = document.getElementById('taskDeadline');
const taskTableBody = document.getElementById('taskTableBody');


taskForm.addEventListener('submit', function (event) {
  event.preventDefault();

  const name = taskName.value.trim();
  const description = taskDescription.value.trim();
  const deadline = taskDeadline.value;

  if (!name || !description || !deadline) return;

  addTask(name, description, deadline);
  taskForm.reset();
});


function addTask(name, description, deadline) {
  taskId++;
  tasks.push({ id: taskId, name, description, deadline });
  renderTasks();
}


function renderTasks() {
  taskTableBody.innerHTML = '';
  tasks.forEach((task, index) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${index + 1}</td>
      <td>${task.name}</td>
      <td>${task.description}</td>
      <td>${task.deadline}</td>
      <td>
        <button class="btn btn-warning btn-sm" onclick="editTask(${task.id})">Bewerken</button>
        <button class="btn btn-danger btn-sm" onclick="deleteTask(${task.id})">Verwijderen</button>
      </td>
    `;
    taskTableBody.appendChild(row);
  });
}


function editTask(id) {
  const task = tasks.find(t => t.id === id);
  if (!task) return;

  const newName = prompt('Bewerk de taaknaam:', task.name);
  const newDescription = prompt('Bewerk de omschrijving:', task.description);
  const newDeadline = prompt('Bewerk de deadline (YYYY-MM-DD):', task.deadline);

  if (newName) task.name = newName.trim();
  if (newDescription) task.description = newDescription.trim();
  if (newDeadline) task.deadline = newDeadline;

  renderTasks();
}


function deleteTask(id) {
  tasks = tasks.filter(t => t.id !== id);
  renderTasks();
}
