<?php
    $string = file_get_contents('list-todo.json');

    $list_todo = json_decode($string, true);

    if(isset($_POST['todo'])){
        $todo_item = $_POST['name'];

        $todo_array = [
            "name" => $todo_item,
            "done" => false,
        ];

        $list_todo[] = $todo_array;

        file_get_contents('list-todo.json', json_encode($list_todo));
    }

    header('Content-Type: application/json');

    echo json_encode($list_todo);
  
?>