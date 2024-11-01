<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index(TeacherFormRequest $request)
    {
        //Pesquisar sobre Eloquent ORM
        //https://laravel.com/docs/9.x/eloquent#building-queries

        $teachers = Teacher::query()->orderBy('name')->get(); //dessa forma conseguimos ordernar pelo nome
        //$series = Teacher::all(); //recebe TODOS os dados

        $mensagemSucesso = session('mensagem.sucesso');
        
        return view('teacher.index')->with('teachers', $teachers)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function login(TeacherFormRequest $request)
    {


        return view('teacher.login');
    }

    public function show()
    {
        $teachers = Teacher::query()->orderBy('name')->get(); //dessa forma conseguimos ordernar pelo nome
        //$series = Teacher::all(); //recebe TODOS os dados

        $mensagemSucesso = session('mensagem.sucesso');
        
        return view('teacher.index')->with('teachers', $teachers)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function test()
    {
        return view('teacher.test');
    }

    public function store(TeacherFormRequest $request)
    {
        $teacher = Teacher::create([
            'name' => $request->input('nome'),
            'institution' => $request->input('instituicao'),
            'email' => $request->input('email'),
            'password' => $request->input('senha')]);

        //$request->session()->flash('mensagem.sucesso',"Professor '{$teacher->name}' adicionado com sucesso");
        //Pode ser feito como a forma acima ^^^^^ || Assim não é necessário o parametro Request $request

        return to_route('teachers.index')->with('mensagem.sucesso',"Professor '{$teacher->name}' adicionado com sucesso");
    }

    public function store(TeacherFormRequest $request)
    {
        $teacher = Teacher::create([
            'name' => $request->input('nome'),
            'institution' => $request->input('instituicao'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('senha')), // recomendável usar bcrypt para senhas
        ]);

    public function destroy(Teacher $teacher, TeacherFormRequest $request)
    {
        $teacher->delete();

        $request->session()->flash('mensagem.sucesso',"Professor '{$teacher->name}' removido com sucesso");

        return to_route('teachers.index');
    }

    public function edit(Teacher $teacher)
    {
        return view('teacher.edit')->with('teacher', $teacher);
    }

    public function update(Teacher $teacher, TeacherFormRequest $request)
    {
        $teacher->update([
            'name' => $request->input('nome'),
            'institution' => $request->input('instituicao'),
            'email' => $request->input('email'),
            'password' => $request->input('senha')]);

        return to_route('teachers.index')->with('mensagem.sucesso',"Professor '{$teacher->name}' atualizado com sucesso");
    }

    public function signup()
    {
        return view('teacher.signup');
    }

    public function subject()
    {
        return view('teacher.subject');
    }

    public function activities()
    {
        return view('teacher.activities');
    }

    public function answer()
    {
        return view('teacher.answer');
    }

    public function info_email()
    {
        return view('teacher.info_email');
    }

    public function info_code()
    {
        return view('teacher.info_code');
    }

    public function change_password()
    {
        return view('teacher.change_password');
    }
}
