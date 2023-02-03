<?php

    include __DIR__ . '/function.php';

    $string = file_get_contents('list-todo.json');

    $list_todo = json_decode($string, true);

    if(isset($_POST['name'])){
        $list_todo = addTodo($list_todo, $_POST);
    }

    if(isset($_POST['delete'])){
        $list_todo = deleteTodo($list_todo, $_POST['delete']);
    }

    if(isset($_POST['edit'])){
        $list_todo = editTodo($list_todo, $_POST);
    }

    header('Content-Type: application/json');

    echo json_encode($list_todo);
  
?>