<!-- Main.php -->

<?php

// Include class files
include 'Author.php';
include 'Article.php';
include 'ContentManagementSystem.php';

// Create authors
$author1 = new Author(1, 'John Doe');
$author2 = new Author(2, 'Jane Smith');

// Create articles
$article1 = new Article(101, 'Introduction to PHP', '...', $author1);
$article2 = new Article(102, 'Object-Oriented Programming in PHP', '...', $author2);

// Create a content management system
$cms = new ContentManagementSystem();

// Add articles and authors to the system
$cms->addArticle($article1);
$cms->addArticle($article2);
$cms->addAuthor($author1);
$cms->addAuthor($author2);

// Display articles and authors
$cms->displayArticles();
$cms->displayAuthors();

?>
