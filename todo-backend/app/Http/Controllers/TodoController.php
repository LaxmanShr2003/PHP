use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        return Todo::all();
    }

    public function store(Request $request) {
        return Todo::create($request->all());
    }

    public function update(Request $request, $id) {
        $todo = Todo::findOrFail($id);
        $todo->update($request->all());
        return $todo;
    }

    public function destroy($id) {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return response()->noContent();
    }
}
