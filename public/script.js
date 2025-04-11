function addTask() {
  const taskInput = document.getElementById("taskInput");
  const taskText = taskInput.value.trim();

  if (taskText !== "") {
    const taskList = document.getElementById("taskList");
    const li = document.createElement("li");

    li.innerHTML = `${taskText} <button onclick="toggleDone(this)">✔️</button>`;
    taskList.appendChild(li);
    taskInput.value = "";
  }
}

function toggleDone(button) {
  const li = button.parentElement;
  li.classList.toggle("done");
}
