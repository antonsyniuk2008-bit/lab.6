<?php

$tasks = file_get_contents("data.json");
$tasks = json_decode($tasks, true);

var_dump($tasks);

?>

<?php foreach($tasks as $task): ?>

    <p>
        <?= $task['title']; ?>
    </p>

<?php endforeach ?>

<form action="create.php" method="POST" required>

    <input type="text" name="title" placeholder="Назва завдання" required>
    <br><br>

    <textarea name="description" id="" required></textarea>
    <br><br>

    <select name="priority" id="" required>
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select>

    <br><br>

    <button type="submit">Зберегти</button>

</form>
