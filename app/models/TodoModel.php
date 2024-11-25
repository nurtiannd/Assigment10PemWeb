<?php
class TodoModel {
    private $todos = [];

    public function __construct() {
        // Inisialisasi data todo awal
        $this->todos = [
            ['id' => 1, 'task' => 'Belajar PHP', 'completed' => false],
            ['id' => 2, 'task' => 'Membuat Proyek MVC', 'completed' => false]
        ];
    }

    public function getAllTodos() {
        return $this->todos;
    }

    public function addTodo($task) {
        $newId = count($this->todos) + 1;
        $this->todos[] = [
            'id' => $newId,
            'task' => $task,
            'completed' => false
        ];
    }

    public function deleteTodo($id) {
        $this->todos = array_filter($this->todos, function($todo) use ($id) {
            return $todo['id'] != $id;
        });
    }

    public function toggleTodo($id) {
        foreach ($this->todos as &$todo) {
            if ($todo['id'] == $id) {
                $todo['completed'] = !$todo['completed'];
                break;
            }
        }
    }
}