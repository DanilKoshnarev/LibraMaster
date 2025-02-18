namespace App\Infrastructure\Persistence\Eloquent;

use App\Domain\Entities\Book;
use App\Domain\Repositories\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{
    public function save(Book $book)
    {
        // Implementation using Eloquent ORM
    }

    public function findById($id)
    {
        // Implementation using Eloquent ORM
    }

    public function findAll()
    {
        // Implementation using Eloquent ORM
    }

    public function delete($id)
    {
        // Implementation using Eloquent ORM
    }
}
