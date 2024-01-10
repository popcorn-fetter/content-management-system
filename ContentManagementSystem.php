<!-- ContentManagementSystem.php -->

<?php

class ContentManagementSystem {
    private $articles = [];
    private $authors = [];

    public function addArticle(Article $article) {
        $this->articles[] = $article;
    }

    public function addAuthor(Author $author) {
        $this->authors[] = $author;
    }

    public function displayArticles() {
        echo "All Articles:\n";
        foreach ($this->articles as $article) {
            $article->display();
            echo "\n";
        }
    }

    public function displayAuthors() {
        echo "All Authors:\n";
        foreach ($this->authors as $author) {
            echo "Author ID: {$author->getName()}\n";
        }
    }
}

?>
