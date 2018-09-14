<?php

class Post {
    public $title;

    public $authors;

    public $published;

    public function __construct($title, $author, $published) {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

class Task {
    public $description;

    public $assigned_to;

    public $completed;

    public function __construct($description, $assigned_to, $completed) {
        $this->description = $description;
        $this->assigned_to = $assigned_to;
        $this->completed = $completed;
    }
}

$posts = [
    new Post('My First Post', 'JW', true),
    new Post('My Second Post', 'JW', true),
    new Post('My Third Post', 'AW', true),
    new Post('My Fourth Post', 'TW', false)
];

// $publishedPost = array_filter($posts, function ($post) {
//     return $post->published;
// });

// $unpublishedPost = array_filter($posts, function ($post) {
//     return ! $post->published;
// });


// $modified = array_map(function ($post) {
//     return (array) $post;
// }, $posts);

// $authors = array_column($posts, 'author', 'title');

// var_dump($authors);

$tasks = [
    new Task('Clean the house', 'Me', false),
    new Task('Book 4th live ticket', 'Me', false),
    new Task('Apply for HK marathon', 'Me', false),
    new Task('Buy food', 'You', true)
];

// $filter = array_filter($tasks, function($task) {
//     return $task->completed;
// });

// var_dump($filter);

// $map = array_map(function ($task){
//     $task = (array) $task;
//     $task['assigned_to'] = 'Matt';
//     return $task;
// }, $tasks);

// var_dump($map);

// $description = array_column($tasks, 'assigned_to', 'description');

// var_dump($description);