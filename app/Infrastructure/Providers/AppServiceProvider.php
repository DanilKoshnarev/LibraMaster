namespace App\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Repositories\BookRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\BookRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(BookRepositoryInterface::class, BookRepository::class);
    }
}
