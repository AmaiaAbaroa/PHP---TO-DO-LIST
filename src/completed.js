function markCompleted(taskId, checkbox) {
    const taskTitle = document.getElementById('taskTitle_' + taskId);
    taskTitle.style.textDecoration = checkbox.checked ? 'line-through' : 'none';

    const form = document.createElement('form');
    form.method = 'POST';
    form.action = '';

    const taskInput = document.createElement('input');
    taskInput.type = 'hidden';
    taskInput.name = 'task_id';
    taskInput.value = taskId;

    const completedInput = document.createElement('input');
    completedInput.type = 'hidden';
    completedInput.name = 'completed';
    completedInput.value = checkbox.checked ? '1' : '0';

    form.appendChild(taskInput);
    form.appendChild(completedInput);

    document.body.appendChild(form);
    form.submit();
}