<!-- Article.php -->

<?php

class Article {
    private $articleId;
    private $title;
    private $content;
    private $author;

    public function __construct($id, $title, $content, Author $author) {
        $this->articleId = $id;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function display() {
        echo "Article ID: {$this->articleId}\n";
        echo "Title: {$this->title}\n";
        echo "Content: {$this->content}\n";
        echo "Author: {$this->author->getName()}\n";
    }
}

?>
