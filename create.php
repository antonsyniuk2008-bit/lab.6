<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = '';
    $description = '';
    $priority = '';

    if (isset($_POST['title'])) {
        $title = $_POST['title'];
    }

    if (isset($_POST['description'])) {
        $description = $_POST['description'];
    }

    if (isset($_POST['priority'])) {
        $priority = $_POST['priority'];
    }

    $data = file_get_contents('data.json');
    $data = json_decode($data, true);

    $data[] = array(
        'title' => $title,
        'description' => $description,
        'priority' => $priority
    );

    $data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    file_put_contents('data.json', $data);

    echo "<h1>Дані збережено!</h1>";
    echo "<a href='index.php'>Назад</a>";
}
?>
