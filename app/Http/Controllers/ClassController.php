<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::query()->orderBy('name')->get();

        $mensagemSucesso = session('mensagem.sucesso');
        
        return view('class.index')->with('classes', $classes)->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['turma' => 'required|max:35']);

        $class = Classes::create(['name' => $request->input('turma'),]);

        return to_route('classes.index')->with('mensagem.sucesso',"Turma '{$class->name}' adicionada com sucesso");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classes $class)
    {
        return view('class.edit')->with('class', $class);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classes $class)
    {
        $class->update(['name' => $request->input('turma'),]);

        return to_route('classes.index')->with('mensagem.sucesso',"Turma '{$class->name}' atualizada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $class, Request $request)
    {
        $class->delete();

        $request->session()->flash('mensagem.sucesso',"Turma '{$class->name}' removida com sucesso");

        return to_route('classes.index');
    }
}
