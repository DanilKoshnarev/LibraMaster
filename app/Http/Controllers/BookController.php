namespace App\Http\Controllers;

use App\Domain\UseCases\ManageBooks;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $manageBooks;

    public function __construct(ManageBooks $manageBooks)
    {
        $this->manageBooks = $manageBooks;
    }

    public function createBook(Request $request)
    {
        $this->manageBooks->createBook(
            $request->input('id'),
            $request->input('title'),
            $request->input('author'),
            $request->input('isbn'),
            $request->input('publishedDate'),
            $request->input('status')
        );

        return response()->json(['message' => 'Книжка створена успішно']);
    }

    public function getAllBooks()
    {
        return response()->json($this->manageBooks->viewAllBooks());
    }

    public function deleteBook($id)
    {
        $this->manageBooks->removeBook($id);

        return response()->json(['message' => 'Книжка створена успішно']);
    }
}
