use App\Http\Controllers\BookController;

Route::post('/books', [BookController::class, 'createBook']);
Route::get('/books', [BookController::class, 'getAllBooks']);
Route::delete('/books/{id}', [BookController::class, 'deleteBook']);
