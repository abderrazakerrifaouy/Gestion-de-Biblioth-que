<?php
class Book
{
    private ?int $id;
    private string $title;
    private string $author;
    private int $year;
    private string $status;
    private ?string $imagePath;

    public function __construct(
        ?int $id,
        string $title,
        string $author,
        int $year,
        string $status = 'available',
        ?string $imagePath = null
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->status = $status;
        $this->imagePath = $imagePath;
    }

    public function __get($name){
        return $this->$name;
    }
}