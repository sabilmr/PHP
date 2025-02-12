<?php

require_once __DIR__ . '/GetConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

//$commnet = new Comment(email: "repository@gmail.com", comment: "Hi");
//$newComment = $repository->insert($commnet);

//var_dump($newComment->getId());

//$comments = $repository->findById(37);
//var_dump($comments);

$comments = $repository->findAll();
var_dump($comments);

$connection = null;
