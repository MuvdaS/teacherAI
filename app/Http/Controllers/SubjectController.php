<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::query()->orderBy('name')->get();

        $mensagemSucesso = session('mensagem.sucesso');
        
        return view('subject.index')->with('subjects', $subjects)->with('mensagemSucesso', $mensagemSucesso);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['materia' => 'required|max:35']);

        $subject = Subject::create(['name' => $request->input('materia'),]);

        return to_route('subjects.index')->with('mensagem.sucesso',"Matéria '{$subject->name}' adicionada com sucesso");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('subject.edit')->with('subject', $subject);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $subject->update(['name' => $request->input('materia'),]);

        return to_route('subjects.index')->with('mensagem.sucesso',"Matéria '{$subject->name}' atualizada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject, Request $request)
    {
        $subject->delete();

        $request->session()->flash('mensagem.sucesso',"Matéria '{$subject->name}' removida com sucesso");

        return to_route('subjects.index');
    }
}
