<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    protected $openAI;

    public function __construct(OpenAIController $openAI)
    {
        $this->openAI = $openAI;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::query()->orderBy('id')->get();

        $mensagemSucesso = session('mensagem.sucesso');
        
        return view('task.index')->with('tasks', $tasks)->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['resposta' => 'required']);

        $userInput = $request->input('resposta');
        $apiResponse = $this->openAI->getCompletion($userInput);


         if ($apiResponse) {
            // Armazena a resposta no banco de dados
            $task = Task::create(['response' => $apiResponse]);

            return to_route('tasks.index')->with('mensagem.sucesso', "Resposta adicionada com sucesso");
        } else {
            return to_route('tasks.index')->with('mensagem.sucesso', "Falha ao obter resposta da API");
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('task.edit')->with('task', $task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->update(['response' => $request->input('resposta'),]);

        return to_route('tasks.index')->with('mensagem.sucesso',"Resposta atualizada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task, Request $request)
    {
        $task->delete();

        $request->session()->flash('mensagem.sucesso',"Resposta removida com sucesso");

        return to_route('tasks.index');

    }
}
