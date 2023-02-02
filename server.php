<?php
    $string = file_get_contents('list-todo.json');

    $list_todo = json_decode($string, true);

    if(isset($_POST['name'])){
        $todo_item = $_POST['name'];

        $todo_array = [
            "name" => $todo_item,
            "done" => false,
        ];

        $list_todo[] = $todo_array;

        file_put_contents('list-todo.json', json_encode($list_todo, JSON_PRETTY_PRINT));
    }

    if(isset($_POST['delete'])){

        unset($list_todo[$_POST['delete']]);

        file_put_contents('list-todo.json', json_encode($list_todo, JSON_PRETTY_PRINT));

    }


    header('Content-Type: application/json');

    echo json_encode($list_todo);
  
?>