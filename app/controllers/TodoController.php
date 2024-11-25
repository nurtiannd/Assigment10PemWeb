<?php
require_once '../app/models/TodoModel.php';

class TodoController {
    private $model;

    public function __construct() {
        $this->model = new TodoModel();
    }

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['add'])) {
                $this->model->addTodo($_POST['task']);
            } elseif (isset($_POST['delete'])) {
                $this->model->deleteTodo($_POST['id']);
            } elseif (isset($_POST['toggle'])) {
                $this->model->toggleTodo($_POST['id']);
            }
        }

        $todos = $this->model->getAllTodos();
        include '../app/views/layout.php';
    }
}