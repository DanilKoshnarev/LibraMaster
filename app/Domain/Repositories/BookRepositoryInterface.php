
namespace App\Domain\Repositories;

use App\Domain\Entities\Book;

interface BookRepositoryInterface
{
    public function save(Book $book);
    public function findById($id);
    public function findAll();
    public function delete($id);
}
