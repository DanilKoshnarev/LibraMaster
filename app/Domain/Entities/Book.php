namespace App\Domain\Entities;

class Book
{
    private $id;
    private $title;
    private $author;
    private $isbn;
    private $publishedDate;
    private $status;

    public function __construct($id, $title, $author, $isbn, $publishedDate, $status)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->publishedDate = $publishedDate;
        $this->status = $status;
    }

    // Getters and setters 
}
