 namespace App\Domain\UseCases;

use App\Domain\Entities\Book;
use App\Domain\Repositories\BookRepositoryInterface;

class ManageBooks
{
    private $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function createBook($id, $title, $author, $isbn, $publishedDate, $status)
    {
        $book = new Book($id, $title, $author, $isbn, $publishedDate, $status);
        $this->bookRepository.save($book);
    }

    public function viewBook($id)
    {
        return $this->bookRepository.findById($id);
    }

    public function viewAllBooks()
    {
        return $this->bookRepository.findAll();
    }

    public function removeBook($id)
    {
        $this->bookRepository.delete($id);
    }
}
