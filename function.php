<?php

function addTodo($list_todo, $name){

    $todo_item = $_POST['name'];
    $done = $_POST['done'];

    $todo_array = [
        "name" => $todo_item,
        "done" => $done,
    ];

    $list_todo[] = $_POST;

    file_put_contents('list-todo.json', json_encode($list_todo, JSON_PRETTY_PRINT));

    return $list_todo;
}

function deleteTodo($list_todo, $index){

    unset($list_todo[$index]);

    file_put_contents('list-todo.json', json_encode($list_todo, JSON_PRETTY_PRINT));

    return $list_todo;

}

function editTodo($list_todo, $post){

    $replacement = array(
        $post['edit'] => array(
        'name' => $post['new_name'],
        'done' => false
    ));

    $list_todo = array_replace($list_todo, $replacement);
    
    file_put_contents('list-todo.json', json_encode($list_todo, JSON_PRETTY_PRINT));

    return $list_todo;
}

?>