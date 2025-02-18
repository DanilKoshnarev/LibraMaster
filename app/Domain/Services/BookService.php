namespace App\Domain\Services;
use App\Domain\Repositories\BookRepositoryInterface;

class BookService
{
    private $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function addBook($book)
    {
        $this->bookRepository.save($book);
    }

    public function getBook($id)
    {
        return $this->bookRepository.findById($id);
    }

    public function getAllBooks()
    {
        return $this->bookRepository.findAll();
    }

    public function deleteBook($id)
    {
        $this->bookRepository.delete($id);
    }
}
