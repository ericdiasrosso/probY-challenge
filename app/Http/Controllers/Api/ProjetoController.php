namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projeto;

class ProjetoController extends Controller
{
    public function index()
    {
        return response()->json(Projeto::paginate(10));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'data_inicio' => 'required|date',
            'status' => 'required|in:Pendente,Em Andamento,Concluído',
        ]);

        $projeto = Projeto::create($validated);
        return response()->json($projeto, 201);
    }

    public function show(Projeto $projeto)
    {
        return response()->json($projeto);
    }

    public function update(Request $request, Projeto $projeto)
    {
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'data_inicio' => 'required|date',
            'status' => 'required|in:Pendente,Em Andamento,Concluído',
        ]);

        $projeto->update($validated);
        return response()->json($projeto);
    }

    public function destroy(Projeto $projeto)
    {
        $projeto->delete();
        return response()->json(null, 204);
    }
}
