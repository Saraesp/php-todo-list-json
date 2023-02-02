<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CDN BOOTSTRAP E AXIOS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <!-- style css -->
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:opsz,wght@6..96,700&family=Montserrat:wght@200;300;400&family=PT+Sans&family=Roboto:wght@400;500&family=Sofia+Sans+Condensed:wght@600&display=swap" rel="stylesheet"> 

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div id="app">
            <div class="container">
                <h1 class="text-center style-h1 p-4">Todo List</h1>
                <div class="row w-50 ">
                    <div class="col-12">
                        <ul class="list-unstyled">
                            <li class="p-2 text-white border border-secondary" v-for="(todo, index) in todoList">
                                <div class="d-flex justify-content-between align-items-center"> 
                                    <div>{{ todo.name }}</div>
                                    <div>
                                        <button class="btn btn-danger" @click="deleteTodo(index)"><i class="fa fa-trash"></i></button>
                                        <button class="btn btn-danger" @click="editTodo(index)"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="button-addon2" v-model="name">
                            <button class="btn btn-outline-warning" type="button" id="button-addon2" @click="addTodo">Inserisci</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="script.js"></script>
</html>