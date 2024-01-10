<!-- Author.php -->

<?php

class Author {
    private $authorId;
    private $name;

    public function __construct($id, $name) {
        $this->authorId = $id;
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

?>
