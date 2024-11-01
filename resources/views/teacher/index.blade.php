<x-layout title="TeacherAI Test">

	<a href="{{ route('teachers.create') }}" class="btn btn-success">Adicionar</a>

	@isset($mensagemSucesso)	
		<div class="alert alert-success mb-2">
			{{ $mensagemSucesso }}
		</div>
	@endisset

	<ul class="list-group mb-2">
		@foreach ($teachers as $teacher)
			<li class="list-group-item d-flex justify-content-between align-items-center">
				{{ $teacher->name }} - 
				{{ $teacher->institution }} - 
				{{ $teacher->email }} - 
				{{ $teacher->password }}

				<span class="d-flex">
					<a href="{{ route('teachers.edit', ['teacher' => $teacher]) }}" class="btn btn-primary me-2">Editar</a>

					<form action="{{ route('teachers.destroy', ['teacher' => $teacher] ) }}" method="post">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Deletar</button>
					</form>
				</span>
			</li>
		@endforeach
	</ul>
</x-layout>